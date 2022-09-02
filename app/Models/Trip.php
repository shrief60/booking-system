<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;

    protected $casts = [
        'stations' => 'array',
    ];

    public function stations()
    {
        return  $this->belongsToMany(Station::class, 'trip_staions');
    }

    public function  reservations()
    {
        return $this->hasMany(Reservation::class);
    }

    public function Bus()
    {
        return $this->hasOne(TripBus::class);
    }
}
