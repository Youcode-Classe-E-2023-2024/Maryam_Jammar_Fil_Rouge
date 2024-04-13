<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'country',
        'city',
        'event_type',
        'date',
        'time',
        'price',
        'nbr_place',
        'description',
        'image',
        'category',
        'creator'
    ];
}
