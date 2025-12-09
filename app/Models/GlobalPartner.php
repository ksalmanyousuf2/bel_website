<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GlobalPartner extends Model
{
    protected $fillable = [
        'name',
        'description',
        'logo',
        'order',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'order' => 'integer',
    ];
}
