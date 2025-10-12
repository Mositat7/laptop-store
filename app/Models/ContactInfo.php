<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'address',
        'email',
        'phones',
        'working_hours',
        'map_location'
    ];

    protected $casts = [
        'phones' => 'array'
    ];
}
