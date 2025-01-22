<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{

    protected $table = "beritas";
    protected $primaryKey = "id";

    protected $fillable = [
        'img',
        'title',
        'subtitle',
        'context',
        'img_caption',
        'author_id',
        'date',
        'category',
        'status',
        'is_redaksi',
    ];

    
    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }
    public function category()
    {
        return $this->belongsTo(Berita_kategori::class, 'category');
    }
}
    
