<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class berita extends Model
{
    protected $table = 'berita';
    protected $fillable = ['img', 'title', 'text', 'author', 'date', 'category'];
    public $timestamps = false;

    public function getBerita()
    {
        return $this->all();
    }

    public function getBeritaById($id)
    {
        return $this->find($id);
    }

    public function addBerita($data)
    {
        return $this->create($data);
    }

    public function updateBerita($id, $data)
    {
        return $this->where('id', $id)->update($data);
    }

    public function deleteBerita($id)
    {
        return $this->where('id', $id)->delete();
    }

    public function searchBerita($keyword)
    {
        return $this->where('title', 'like', '%' . $keyword . '%')->get();
    }

    public function getBeritaByCategory($category)
    {
        return $this->where('category', $category)->get();
    }


}
