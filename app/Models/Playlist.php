<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    protected $table = "playlists";
    protected $primaryKey = "id";

    protected $fillable = [
        'title',
        'cover',
        'context',
        'is_active',
        'author',
        'date',
        
    ];

    
    public function author()
    {
        return $this->belongsTo(User::class, 'author');
    }
}
