<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Car;

class Client extends Model
{
    use HasFactory;

    public function cars()
    {
        return $this->hasMany(Car::class);
    }

    public function appointments()
    {
        return $this->hasMany('App\Models\Appointment');
    }
}
