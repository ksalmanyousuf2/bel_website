<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Job extends Model
{
    protected $table = 'career_jobs';

    protected $fillable = [
        'title',
        'slug',
        'description',
        'requirements',
        'responsibilities',
        'benefits',
        'location',
        'type',
        'salary_range',
        'department',
        'application_deadline',
        'is_active',
        'views',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'application_deadline' => 'date',
        'views' => 'integer',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($job) {
            if (empty($job->slug)) {
                $job->slug = Str::slug($job->title);
            }
        });

        static::updating(function ($job) {
            if ($job->isDirty('title') && empty($job->slug)) {
                $job->slug = Str::slug($job->title);
            }
        });
    }

    public function applications()
    {
        return $this->hasMany(JobApplication::class, 'career_job_id');
    }

    public function incrementViews()
    {
        $this->increment('views');
    }
}
