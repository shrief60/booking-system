<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    public function trip()
    {
        return $this->hasOne(Trip::class);
    }

    public function fromStation()
    {
        return $this->hasOne(Station::class, 'from_station');   
    }

    public function toStation()
    {
        return $this->hasOne(Station::class, 'to_station');   
    }

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
