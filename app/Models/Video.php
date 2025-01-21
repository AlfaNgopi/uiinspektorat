<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $table = "videos";
    protected $primaryKey = "id";

    protected $fillable = [
        'title',
        'playlist',
        'youtube_link',
        'context',
        'author',
        'date',
        
    ];

    
    public function author()
    {
        return $this->belongsTo(User::class, 'author');
    }
}
