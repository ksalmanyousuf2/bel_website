<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Carbon\Carbon;

class BlogDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sqlFile = '/Users/aliiftikhar/Downloads/DB/u742614876_blogs.sql';
        
        if (!file_exists($sqlFile)) {
            $this->command->error("SQL file not found at: {$sqlFile}");
            return;
        }

        $this->command->info('Reading SQL file...');
        $content = file_get_contents($sqlFile);
        
        // Extract all INSERT statements (handle multi-line)
        // Match INSERT INTO blogs ... VALUES ... until semicolon
        preg_match_all(
            '/INSERT INTO\s+`?blogs`?\s*\([^)]+\)\s+VALUES\s+(.+?);/is',
            $content,
            $matches
        );

        if (empty($matches[1])) {
            $this->command->error('No INSERT statements found in SQL file.');
            return;
        }

        $this->command->info('Found ' . count($matches[1]) . ' INSERT statement(s). Processing...');

        $monthMap = [
            'Jan' => 1, 'Feb' => 2, 'Mar' => 3, 'Apr' => 4,
            'May' => 5, 'Jun' => 6, 'Jul' => 7, 'Aug' => 8,
            'Sep' => 9, 'Oct' => 10, 'Nov' => 11, 'Dec' => 12
        ];

        $processed = 0;
        $skipped = 0;

        foreach ($matches[1] as $valuesString) {
            $this->processInsertValues($valuesString, $monthMap, $processed, $skipped);
        }

        $this->command->info("Migration completed!");
        $this->command->info("Successfully imported: {$processed} blogs");
        $this->command->info("Skipped: {$skipped} records");
    }

    /**
     * Process all rows from an INSERT VALUES string
     */
    private function processInsertValues(string $valuesString, array $monthMap, int &$processed, int &$skipped): void
    {
        // Use a simpler approach: split by ),( pattern but handle it carefully
        // First, let's try to match all rows using a more robust method
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
            $start = $i + 1; // Skip the opening (
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
                            // Found end of row
                            $rowContent = substr($valuesString, $start, $i - $start);
                            $rows[] = $rowContent;
                            $i++; // Move past closing )
                            break;
                        }
                    }
                } else {
                    // Inside string
                    if (($char === '\\' && $nextChar === $stringChar) || 
                        ($char === $stringChar && $nextChar === $stringChar)) {
                        // Escaped quote
                        $i++; // Skip next char
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
            $this->processRow($row, $monthMap, $processed, $skipped);
        }
    }

    /**
     * Process a single row from the SQL file
     */
    private function processRow(string $rowData, array $monthMap, int &$processed, int &$skipped): void
    {
        // Parse the row values - split by comma but respect quoted strings
        $values = $this->parseRowValues($rowData);
        
        if (count($values) < 12) {
            $skipped++;
            return;
        }

        // Extract and clean values
        $blogid = (int) trim($values[0]);
        $name = $this->unquote(trim($values[1]));
        $day = (int) trim($values[2]);
        $month = $this->unquote(trim($values[3]));
        $year = (int) trim($values[4]);
        $paras = $this->unquote(trim($values[5]));
        $para_1 = $this->unquote(trim($values[6]));
        $img = $this->unquote(trim($values[7]));
        $alt = $this->unquote(trim($values[8]));
        $desc = $this->unquote(trim($values[9]));
        $keywords = $this->unquote(trim($values[10]));
        $active = (int) trim($values[11]);

        // Skip empty or invalid records
        if (empty($name) || $blogid === 0) {
            $skipped++;
            return;
        }

        // Transform data
        $title = $name;
        $slug = Str::slug($title);
        
        // Ensure unique slug
        $baseSlug = $slug;
        $counter = 1;
        while (Blog::where('slug', $slug)->exists()) {
            $slug = $baseSlug . '-' . $counter;
            $counter++;
        }

        $excerpt = !empty($para_1) ? $para_1 : null;
        $content = !empty($paras) ? $paras : '';
        $featuredImage = !empty($img) ? $img : null;
        $isPublished = $active === 1;

        // Convert date components to published_at
        $publishedAt = null;
        if ($day > 0 && $year > 0 && !empty($month)) {
            $monthNum = $monthMap[$month] ?? null;
            if ($monthNum) {
                try {
                    $publishedAt = Carbon::create($year, $monthNum, $day, 0, 0, 0);
                } catch (\Exception $e) {
                    // Invalid date, leave as null
                    $publishedAt = null;
                }
            }
        }

        // Create blog entry
        try {
            Blog::create([
                'title' => $title,
                'slug' => $slug,
                'excerpt' => $excerpt,
                'content' => $content,
                'featured_image' => $featuredImage,
                'is_featured' => false,
                'is_published' => $isPublished,
                'published_at' => $publishedAt,
            ]);

            $processed++;
            if ($processed % 10 === 0) {
                $this->command->info("Processed {$processed} blogs...");
            }
        } catch (\Exception $e) {
            $this->command->warn("Failed to insert blog '{$title}': " . $e->getMessage());
            $skipped++;
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
                    // Escaped quote or double quote
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

        // Add the last value (always add it, even if empty, to maintain field count)
        $values[] = trim($currentValue);

        return $values;
    }
}

