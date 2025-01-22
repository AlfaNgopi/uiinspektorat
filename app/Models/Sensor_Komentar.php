<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sensor_Komentar extends Model
{
    protected $table = 'sensor_komentar';
    protected $primaryKey = 'id';

    protected $fillable = [
        'badword',
    ];
}
