<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    protected $table = "komentars";
    protected $primaryKey = "id";

    protected $fillable = [
        'username',
        'email',
        'context',
        'date',
        
        
    ];

    
}
