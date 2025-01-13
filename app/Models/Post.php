<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'collectivetable';

    // Add fillable fields for mass assignment
    protected $fillable = [
        'VINNumber',
        'CarRegistration',
        'CarMake',
        'CarModel',
        'CarMileage',
        'CheckEngine',
        'Lights',
        'ParkSensor',
        'AirSuspension',
        'AutoTailGate',
        'SlipDifferential',
    ];
}
