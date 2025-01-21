<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gambar extends Model
{
    protected $table = "gambars";
    protected $primaryKey = "id";

    protected $fillable = [
        'img',
        'title',
        'gallery',
        'context',
        'author',
        'date',
        
    ];

    
    public function author()
    {
        return $this->belongsTo(User::class, 'author');
    }
}
