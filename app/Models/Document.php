<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    
    protected $table = "documents";
    protected $primaryKey = "id";

    protected $fillable = [
        'img',
        'title',
        'subtitle',
        'context',
        'img_caption',
        'author',
        'date',
        
    ];

    
    public function author()
    {
        return $this->belongsTo(User::class, 'author');
    }
}
