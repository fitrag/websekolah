<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $guarded =[''];

    public function categori()
    {
        return $this->belongsTo('App\Models\Category','category_id','id');
    }
    public function kategori()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id','id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    
}
