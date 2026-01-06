<?php

namespace App\Console\Commands;

use App\Models\Event;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class RemoveDuplicateEvents extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'events:remove-duplicates';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Remove duplicate events based on title, keeping the oldest event for each title';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Scanning for duplicate events...');

        // Find all duplicate titles
        $duplicates = Event::select('title')
            ->groupBy('title')
            ->havingRaw('COUNT(*) > 1')
            ->get();

        if ($duplicates->isEmpty()) {
            $this->info('No duplicate events found.');
            return 0;
        }

        $this->info("Found {$duplicates->count()} duplicate title(s).");

        $totalRemoved = 0;
        $totalKept = 0;

        foreach ($duplicates as $duplicate) {
            // Get all events with this title, ordered by event_date (oldest first), then by id
            $events = Event::where('title', $duplicate->title)
                ->orderBy('event_date', 'asc')
                ->orderBy('id', 'asc')
                ->get();

            // Keep the first one (oldest)
            $keepEvent = $events->first();
            $eventsToRemove = $events->skip(1);

            $this->line("Processing: '{$duplicate->title}'");
            $this->line("  Keeping: Event ID {$keepEvent->id} (Date: {$keepEvent->event_date})");

            foreach ($eventsToRemove as $event) {
                // Delete associated image if it exists and is different from the kept event
                if ($event->image && $event->image !== $keepEvent->image) {
                    if (Storage::disk('public')->exists($event->image)) {
                        Storage::disk('public')->delete($event->image);
                        $this->line("  Deleted image: {$event->image}");
                    }
                }

                $event->delete();
                $totalRemoved++;
                $this->line("  Removed: Event ID {$event->id} (Date: {$event->event_date})");
            }

            $totalKept++;
        }

        $this->info("\nSummary:");
        $this->info("  Kept: {$totalKept} unique events");
        $this->info("  Removed: {$totalRemoved} duplicate events");

        return 0;
    }
}
