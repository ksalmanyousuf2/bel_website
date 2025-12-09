<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'contact_no',
        'hear_about_us',
        'customer_type',
        'max_summer_bill',
        'property_type',
    ];
}
