<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model
{
    protected $fillable = [
        'career_job_id',
        'first_name',
        'last_name',
        'email',
        'phone',
        'cover_letter',
        'resume_path',
        'status',
        'admin_notes',
    ];

    protected $casts = [
        'career_job_id' => 'integer',
    ];

    public function job()
    {
        return $this->belongsTo(Job::class, 'career_job_id');
    }

    public function getFullNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }
}
