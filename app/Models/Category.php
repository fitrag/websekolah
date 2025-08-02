<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [''];
    public function coursels()
    {
        return $this->hasMany(Carousel::class);
    }

    public function berita()
    {
        return $this->hasMany(Berita::class, 'category_id');
    }
}
