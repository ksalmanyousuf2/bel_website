<?php

namespace App\Console\Commands;

use App\Models\Blog;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class UploadBlogImages extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'blog:upload-images 
                            {--sql-file= : Path to the old SQL file}
                            {--images-dir= : Path to the images directory}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Upload blog images from old database and update featured_image URLs';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $sqlFile = $this->option('sql-file') ?: '/Users/aliiftikhar/Downloads/DB/u742614876_blogs.sql';
        $imagesDir = $this->option('images-dir') ?: '/Users/aliiftikhar/Downloads/images';

        if (!file_exists($sqlFile)) {
            $this->error("SQL file not found at: {$sqlFile}");
            return 1;
        }

        if (!is_dir($imagesDir)) {
            $this->error("Images directory not found at: {$imagesDir}");
            return 1;
        }

        $this->info('Reading SQL file...');
        $content = file_get_contents($sqlFile);
        
        // Extract all INSERT statements
        preg_match_all(
            '/INSERT INTO `blogs`[^;]*VALUES\s+(.+?);/s',
            $content,
            $matches
        );

        if (empty($matches[1])) {
            $this->error('No INSERT statements found in SQL file.');
            return 1;
        }

        $this->info('Parsing blog data from SQL...');
        $blogMappings = [];
        
        // Process all INSERT statements
        foreach ($matches[1] as $valuesString) {
            $mappings = $this->extractBlogMappings($valuesString);
            $blogMappings = array_merge($blogMappings, $mappings);
        }
        
        $this->info('Found ' . count($blogMappings) . ' blogs in SQL file.');
        
        // Ensure storage directory exists
        $storagePath = storage_path('app/public/blogs');
        if (!File::exists($storagePath)) {
            File::makeDirectory($storagePath, 0755, true);
            $this->info('Created storage directory: ' . $storagePath);
        }

        $uploaded = 0;
        $updated = 0;
        $notFound = 0;
        $skipped = 0;

        foreach ($blogMappings as $mapping) {
            $title = $mapping['title'];
            $imageName = $mapping['image'];
            
            if (empty($title) || empty($imageName)) {
                $skipped++;
                continue;
            }

            // Find matching blog by title
            $blog = Blog::where('title', $title)->first();
            
            if (!$blog) {
                // Try fuzzy matching with slug
                $slug = Str::slug($title);
                $blog = Blog::where('slug', $slug)
                    ->orWhere('slug', 'like', $slug . '%')
                    ->first();
            }

            if (!$blog) {
                $this->warn("Blog not found: {$title}");
                $notFound++;
                continue;
            }

            // Find image file (try different extensions)
            $imageFile = $this->findImageFile($imagesDir, $imageName);
            
            if (!$imageFile) {
                $this->warn("Image not found for '{$imageName}' (blog: {$title})");
                $notFound++;
                continue;
            }

            // Generate unique filename
            $extension = pathinfo($imageFile, PATHINFO_EXTENSION);
            $newFileName = Str::slug($title) . '-' . uniqid() . '.' . $extension;
            $storagePath = 'blogs/' . $newFileName;

            // Copy image to storage
            try {
                $fileContents = file_get_contents($imageFile);
                Storage::disk('public')->put($storagePath, $fileContents);
                
                // Delete old image if exists
                if ($blog->featured_image) {
                    Storage::disk('public')->delete($blog->featured_image);
                }

                // Update blog
                $blog->featured_image = $storagePath;
                $blog->save();

                $uploaded++;
                $updated++;
                $this->info("✓ Updated: {$title} -> {$storagePath}");
            } catch (\Exception $e) {
                $this->error("Failed to upload image for '{$title}': " . $e->getMessage());
                $skipped++;
            }
        }

        $this->newLine();
        $this->info('=== Summary ===');
        $this->info("Images uploaded: {$uploaded}");
        $this->info("Blogs updated: {$updated}");
        $this->info("Not found: {$notFound}");
        $this->info("Skipped: {$skipped}");

        return 0;
    }

    /**
     * Extract blog title and image mappings from SQL INSERT statement
     */
    private function extractBlogMappings(string $valuesString): array
    {
        $mappings = [];
        $rows = $this->parseInsertValues($valuesString);

        foreach ($rows as $row) {
            $values = $this->parseRowValues($row);
            
            if (count($values) < 8) {
                continue;
            }

            $name = $this->unquote(trim($values[1]));
            $img = $this->unquote(trim($values[7]));

            if (!empty($name) && !empty($img)) {
                $mappings[] = [
                    'title' => $name,
                    'image' => $img,
                ];
            }
        }

        return $mappings;
    }

    /**
     * Parse INSERT VALUES string into individual rows
     */
    private function parseInsertValues(string $valuesString): array
    {
        $rows = [];
        $currentRow = '';
        $depth = 0;
        $inString = false;
        $stringChar = null;
        $i = 0;
        $len = strlen($valuesString);

        while ($i < $len) {
            $char = $valuesString[$i];
            $nextChar = ($i + 1 < $len) ? $valuesString[$i + 1] : null;

            if (!$inString) {
                if ($char === "'" || $char === '"') {
                    $inString = true;
                    $stringChar = $char;
                    $currentRow .= $char;
                } elseif ($char === '(') {
                    if ($depth === 0) {
                        $currentRow = '';
                    } else {
                        $currentRow .= $char;
                    }
                    $depth++;
                } elseif ($char === ')') {
                    $depth--;
                    if ($depth === 0) {
                        $rows[] = $currentRow;
                        $currentRow = '';
                        $i++;
                        while ($i < $len && (trim($valuesString[$i]) === '' || $valuesString[$i] === ',')) {
                            $i++;
                        }
                        $i--;
                    } else {
                        $currentRow .= $char;
                    }
                } else {
                    $currentRow .= $char;
                }
            } else {
                $currentRow .= $char;
                
                if (($char === '\\' && $nextChar === $stringChar) || 
                    ($char === $stringChar && $nextChar === $stringChar)) {
                    $currentRow .= $nextChar;
                    $i++;
                } elseif ($char === $stringChar) {
                    $inString = false;
                    $stringChar = null;
                }
            }
            
            $i++;
        }

        return $rows;
    }

    /**
     * Parse row values handling quoted strings
     */
    private function parseRowValues(string $row): array
    {
        $values = [];
        $currentValue = '';
        $inString = false;
        $stringChar = null;
        $i = 0;
        $len = strlen($row);

        while ($i < $len) {
            $char = $row[$i];
            $nextChar = ($i + 1 < $len) ? $row[$i + 1] : null;

            if (!$inString) {
                if ($char === "'" || $char === '"') {
                    $inString = true;
                    $stringChar = $char;
                    $currentValue .= $char;
                    $i++;
                    continue;
                }
                
                if ($char === ',') {
                    $values[] = trim($currentValue);
                    $currentValue = '';
                    $i++;
                    continue;
                }
                
                $currentValue .= $char;
                $i++;
            } else {
                $currentValue .= $char;
                
                if (($char === '\\' && $nextChar === $stringChar) || 
                    ($char === $stringChar && $nextChar === $stringChar)) {
                    $currentValue .= $nextChar;
                    $i += 2;
                    continue;
                }
                
                if ($char === $stringChar) {
                    $inString = false;
                    $stringChar = null;
                }
                
                $i++;
            }
        }

        if (!empty(trim($currentValue)) || $currentValue === "''" || $currentValue === '""' || $currentValue === '0') {
            $values[] = trim($currentValue);
        }

        return $values;
    }

    /**
     * Remove quotes from string value
     */
    private function unquote(string $value): string
    {
        $value = trim($value);
        $len = strlen($value);
        if ($len >= 2 && 
            (($value[0] === "'" && $value[$len - 1] === "'") || 
             ($value[0] === '"' && $value[$len - 1] === '"'))) {
            $value = substr($value, 1, -1);
        }
        $value = str_replace("''", "'", $value);
        $value = str_replace('\\"', '"', $value);
        $value = str_replace("\\'", "'", $value);
        $value = str_replace('\\\\', '\\', $value);
        return $value;
    }

    /**
     * Find image file with different extensions
     */
    private function findImageFile(string $imagesDir, string $imageName): ?string
    {
        $extensions = ['png', 'jpg', 'jpeg', 'gif', 'webp'];
        
        foreach ($extensions as $ext) {
            $filePath = $imagesDir . '/' . $imageName . '.' . $ext;
            if (file_exists($filePath)) {
                return $filePath;
            }
        }

        // Try exact filename match
        $filePath = $imagesDir . '/' . $imageName;
        if (file_exists($filePath)) {
            return $filePath;
        }

        // Try case-insensitive search
        $files = File::files($imagesDir);
        foreach ($files as $file) {
            $fileName = pathinfo($file->getFilename(), PATHINFO_FILENAME);
            if (strtolower($fileName) === strtolower($imageName)) {
                return $file->getPathname();
            }
        }

        return null;
    }
}

