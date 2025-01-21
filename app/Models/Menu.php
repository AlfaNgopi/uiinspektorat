<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = "menus";
    protected $primaryKey = "id";

    protected $fillable = ['text', 'url', 'parent_id', 'target'];

    // Relationship to get child menu items
    public function children()
    {
        return $this->hasMany(MenuItem::class, 'parent_id');
    }

    // Relationship to get parent menu item
    public function parent()
    {
        return $this->belongsTo(MenuItem::class, 'parent_id');
    }

}
