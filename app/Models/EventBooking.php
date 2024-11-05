<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventBooking extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'event_name',
        'event_date',
        'start_time',
        'end_time',
        'num_attendees',
        'special_requirements',
    ];

    protected $dates = [
        'event_date',
        'start_time',
        'end_time',
    ];
}
