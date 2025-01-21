<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = "galleries";
    protected $primaryKey = "id";

    protected $fillable = [
        'title',
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
