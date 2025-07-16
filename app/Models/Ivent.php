<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ivent extends Model
{
    protected $guarded = [];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->slug = \Illuminate\Support\Str::slug($model->judul);
        });
    }

    //update auto slug from judul
    public static function updating($model)
    {
        $model->slug = \Illuminate\Support\Str::slug($model->judul);
    }

}
