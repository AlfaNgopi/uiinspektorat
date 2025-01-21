<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Download extends Model
{
    protected $table = "downloadables";
    protected $primaryKey = "id";

    protected $fillable = [
        'file_name',
        'file_path',
        'frequency',
        
    ];

    
    
}
