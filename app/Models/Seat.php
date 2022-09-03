<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    use HasFactory;

    public function bus()
    {
        return $this->hasOne(Bus::class);
    }

    public function reservation()
    {
        return $this->hasMany(Reservation::class);
    }
}
