<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Project extends Model
{
    protected $fillable = [
        'name',
        'location',
        'capacity',
        'description',
        'category',
        'type',
        'completion_date',
        'order',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'completion_date' => 'date',
    ];

    public function images(): HasMany
    {
        return $this->hasMany(ProjectImage::class)->orderBy('order');
    }
}
