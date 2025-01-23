<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Berita_kategori extends Model
{
    protected $table = 'berita_kategoris';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'article_count',
        'active',
    ];
}
