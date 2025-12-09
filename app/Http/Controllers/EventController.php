<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::where('is_published', true)
            ->orderBy('event_date', 'desc')
            ->paginate(12);

        return view('events.index', compact('events'));
    }

    public function show($slug)
    {
        $event = Event::where('slug', $slug)
            ->where('is_published', true)
            ->firstOrFail();

        $relatedEvents = Event::where('is_published', true)
            ->where('id', '!=', $event->id)
            ->orderBy('event_date', 'desc')
            ->limit(3)
            ->get();

        return view('events.show', compact('event', 'relatedEvents'));
    }
}
