<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DataInstansi extends Model
{
    protected $table = 'data_instansis';
    protected $primaryKey = 'id';

    protected $fillable = [
        'nama_instansi',
        'batas_token',
        'status',
    ];
}
