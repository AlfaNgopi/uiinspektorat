<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JejakPendapat extends Model
{
    protected $table = 'jejak_pendapats';
    protected $primaryKey = 'id';

    protected $fillable = [
        'pilihan',
        'tipe',
        'rating',
        'aktif',
    ];
}
