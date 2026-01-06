<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\ProjectImage;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class ProjectDataSeeder extends Seeder
{
    private $imagesSourcePath = '/Users/aliiftikhar/Downloads/projects';

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sqlFile = '/Users/aliiftikhar/Downloads/u742614876_bel.sql';
        
        if (!file_exists($sqlFile)) {
            $this->command->error("SQL file not found at: {$sqlFile}");
            return;
        }

        if (!is_dir($this->imagesSourcePath)) {
            $this->command->error("Images folder not found at: {$this->imagesSourcePath}");
            return;
        }

        $this->command->info('Reading SQL file...');
        $content = file_get_contents($sqlFile);
        
        // Extract all INSERT statements for projects table
        preg_match_all(
            '/INSERT INTO\s+`?projects`?\s*\([^)]+\)\s+VALUES\s+(.+?);/is',
            $content,
            $matches
        );

        if (empty($matches[1])) {
            $this->command->error('No INSERT statements found in SQL file.');
            return;
        }

        $this->command->info('Found ' . count($matches[1]) . ' INSERT statement(s). Processing...');

        $processed = 0;
        $skipped = 0;

        foreach ($matches[1] as $valuesString) {
            $this->processInsertValues($valuesString, $processed, $skipped);
        }

        $this->command->info("Migration completed!");
        $this->command->info("Successfully imported: {$processed} projects");
        $this->command->info("Skipped: {$skipped} records");
    }

    /**
     * Process all rows from an INSERT VALUES string
     */
    private function processInsertValues(string $valuesString, int &$processed, int &$skipped): void
    {
        $rows = [];
        $i = 0;
        $len = strlen($valuesString);
        
        while ($i < $len) {
            // Skip whitespace and commas
            while ($i < $len && (trim($valuesString[$i]) === '' || $valuesString[$i] === ',')) {
                $i++;
            }
            
            if ($i >= $len) {
                break;
            }
            
            // Look for opening parenthesis
            if ($valuesString[$i] !== '(') {
                $i++;
                continue;
            }
            
            // Found start of row, now find matching closing parenthesis
            $start = $i + 1;
            $depth = 1;
            $inString = false;
            $stringChar = null;
            $i++;
            
            while ($i < $len && $depth > 0) {
                $char = $valuesString[$i];
                $nextChar = ($i + 1 < $len) ? $valuesString[$i + 1] : null;
                
                if (!$inString) {
                    if ($char === "'" || $char === '"') {
                        $inString = true;
                        $stringChar = $char;
                    } elseif ($char === '(') {
                        $depth++;
                    } elseif ($char === ')') {
                        $depth--;
                        if ($depth === 0) {
                            $rowContent = substr($valuesString, $start, $i - $start);
                            $rows[] = $rowContent;
                            $i++;
                            break;
                        }
                    }
                } else {
                    // Inside string
                    if (($char === '\\' && $nextChar === $stringChar) || 
                        ($char === $stringChar && $nextChar === $stringChar)) {
                        $i++;
                    } elseif ($char === $stringChar) {
                        $inString = false;
                        $stringChar = null;
                    }
                }
                
                $i++;
            }
        }

        // Process each row
        foreach ($rows as $rowIndex => $row) {
            if (empty(trim($row))) {
                continue;
            }
            $this->processRow($row, $processed, $skipped);
        }
    }

    /**
     * Process a single row from the SQL file
     */
    private function processRow(string $rowData, int &$processed, int &$skipped): void
    {
        // Parse the row values
        $values = $this->parseRowValues($rowData);
        
        if (count($values) < 7) {
            $this->command->warn("Skipping row with insufficient fields: " . count($values));
            $skipped++;
            return;
        }

        // Extract and clean values
        $id = (int) trim($values[0]);
        $name = $this->unquote(trim($values[1]));
        $city = $this->unquote(trim($values[2]));
        $power = trim($values[3]);
        $projectType = $this->unquote(trim($values[4]));
        $image = $this->unquote(trim($values[5]));
        $createdAt = $this->unquote(trim($values[6]));

        // Skip empty or invalid records
        if (empty($name)) {
            $skipped++;
            return;
        }

        // Map project type: Residential -> Commercial, Commerical -> Commercial
        $type = null;
        if (!empty($projectType)) {
            $projectTypeLower = strtolower($projectType);
            if ($projectTypeLower === 'residential' || $projectTypeLower === 'residntial') {
                $type = 'commercial';
            } elseif ($projectTypeLower === 'commerical' || $projectTypeLower === 'commercial') {
                $type = 'commercial';
            } elseif ($projectTypeLower === 'industrial') {
                $type = 'industrial';
            }
        }

        // Convert power to capacity string
        $capacity = null;
        if (!empty($power) && $power !== 'NULL' && strtolower($power) !== 'null') {
            $powerFloat = (float) $power;
            if ($powerFloat > 0) {
                // Format capacity: if >= 1000, show in MW, otherwise in kW
                if ($powerFloat >= 1000) {
                    $capacity = number_format($powerFloat / 1000, 2) . ' MW';
                } else {
                    $capacity = number_format($powerFloat, 2) . ' kW';
                }
            }
        }

        // Parse completion date from created_at
        $completionDate = null;
        if (!empty($createdAt) && $createdAt !== 'NULL' && strtolower($createdAt) !== 'null') {
            try {
                $completionDate = \Carbon\Carbon::parse($createdAt)->format('Y-m-d');
            } catch (\Exception $e) {
                // Invalid date, leave as null
            }
        }

        // Find and copy image
        $imagePath = null;
        if (!empty($image)) {
            $imagePath = $this->findAndCopyImage($image);
        }

        // Create project entry
        try {
            $project = Project::create([
                'name' => $name,
                'location' => $city ?: null,
                'capacity' => $capacity,
                'description' => null,
                'category' => null,
                'type' => $type,
                'completion_date' => $completionDate,
                'order' => $id, // Use original ID as order
                'is_active' => true,
            ]);

            // Create project image if found
            if ($imagePath) {
                ProjectImage::create([
                    'project_id' => $project->id,
                    'image_path' => $imagePath,
                    'alt_text' => $name,
                    'order' => 0,
                ]);
            }

            $processed++;
            if ($processed % 10 === 0) {
                $this->command->info("Processed {$processed} projects...");
            }
        } catch (\Exception $e) {
            $this->command->warn("Failed to insert project '{$name}': " . $e->getMessage());
            $skipped++;
        }
    }

    /**
     * Find image file by name (without extension) and copy to Laravel storage
     */
    private function findAndCopyImage(string $imageName): ?string
    {
        if (empty($imageName)) {
            return null;
        }

        // Clean the image name (remove any extension that might be in the DB)
        $imageName = preg_replace('/\.(webp|png|jpg|jpeg|gif)$/i', '', $imageName);
        $imageName = trim($imageName);
        
        // Possible extensions to check
        $extensions = ['webp', 'png', 'jpg', 'jpeg', 'gif'];
        
        // Also check for files with spaces or special characters
        $searchPatterns = [
            $imageName,
            str_replace(' ', '-', $imageName),
            str_replace('-', ' ', $imageName),
            str_replace('_', '-', $imageName),
            str_replace('_', ' ', $imageName),
        ];

        // First, try exact matches
        foreach ($searchPatterns as $pattern) {
            foreach ($extensions as $ext) {
                $fullPath = $this->imagesSourcePath . '/' . $pattern . '.' . $ext;
                if (file_exists($fullPath)) {
                    return $this->copyImageToStorage($fullPath);
                }
            }
        }

        // If exact match not found, try case-insensitive search
        $files = File::files($this->imagesSourcePath);
        $imageNameLower = strtolower($imageName);
        
        foreach ($files as $file) {
            $fileName = pathinfo($file->getFilename(), PATHINFO_FILENAME);
            $fileNameLower = strtolower($fileName);
            
            // Try exact match
            if ($fileNameLower === $imageNameLower) {
                return $this->copyImageToStorage($file->getPathname(), $file->getFilename());
            }
            
            // Try partial match (in case image name is part of filename)
            if (strpos($fileNameLower, $imageNameLower) !== false || 
                strpos($imageNameLower, $fileNameLower) !== false) {
                return $this->copyImageToStorage($file->getPathname(), $file->getFilename());
            }
        }

        $this->command->warn("Image not found: {$imageName}");
        return null;
    }

    /**
     * Copy image file to Laravel storage
     */
    private function copyImageToStorage(string $sourcePath, ?string $destinationName = null): ?string
    {
        try {
            // Ensure the directory exists
            Storage::disk('public')->makeDirectory('projects');
            
            $destinationName = $destinationName ?? basename($sourcePath);
            
            // Copy the file
            $copied = Storage::disk('public')->putFileAs(
                'projects',
                $sourcePath,
                $destinationName
            );
            
            return $copied ? $copied : null;
        } catch (\Exception $e) {
            $this->command->warn("Failed to copy image {$sourcePath}: " . $e->getMessage());
            return null;
        }
    }

    /**
     * Remove quotes from a string value
     */
    private function unquote(string $value): string
    {
        $value = trim($value);
        if (empty($value)) {
            return '';
        }
        
        $len = strlen($value);
        if ($len >= 2 && 
            (($value[0] === "'" && $value[$len - 1] === "'") || 
             ($value[0] === '"' && $value[$len - 1] === '"'))) {
            $value = substr($value, 1, -1);
        }
        
        // Unescape SQL strings
        $value = str_replace("''", "'", $value);
        $value = str_replace('\\"', '"', $value);
        $value = str_replace("\\'", "'", $value);
        $value = str_replace('\\\\', '\\', $value);
        return $value;
    }

    /**
     * Parse a single row's values, handling quoted strings properly
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
                // Check for string start
                if ($char === "'" || $char === '"') {
                    $inString = true;
                    $stringChar = $char;
                    $currentValue .= $char;
                    $i++;
                    continue;
                }
                
                // Check for comma (field separator)
                if ($char === ',') {
                    $values[] = trim($currentValue);
                    $currentValue = '';
                    $i++;
                    continue;
                }
                
                $currentValue .= $char;
                $i++;
            } else {
                // We're inside a string
                $currentValue .= $char;
                
                // Check for escaped quote
                if (($char === '\\' && $nextChar === $stringChar) || 
                    ($char === $stringChar && $nextChar === $stringChar)) {
                    $currentValue .= $nextChar;
                    $i += 2;
                    continue;
                }
                
                // Check for string end
                if ($char === $stringChar) {
                    $inString = false;
                    $stringChar = null;
                }
                
                $i++;
            }
        }

        // Add the last value
        $values[] = trim($currentValue);

        return $values;
    }
}

