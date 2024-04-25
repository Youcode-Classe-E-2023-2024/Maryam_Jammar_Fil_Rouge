<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $table = 'reservations';

    protected $fillable = [
        'client',
        'event',
    ];

    public function client()
    {
        return $this->belongsTo(User::class, 'client');
    }
    public function event()
    {
        return $this->belongsTo(Event::class, 'event');
    }
}
