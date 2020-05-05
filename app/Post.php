<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //

    public function getImageUrlAttribute()
    {
        $imageUrl = "";

        if (! is_null($this->image)){
            $imagePath = public_path() . "/img/blog/" . $this->image;
            if (file_exists($imagePath)) $imageUrl = asset("img/blog/" . $this->image);
        }

        return $imageUrl;
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function scopeLife($query)
    {
        return $query->where('category_id', 1);
    }

    public function scopeMovie($query)
    {
        return $query->where('category_id', 4);
    }

    public function scopeBusiness($query)
    {
        return $query->where('category_id', 7);
    }

    public function scopeSport($query)
    {
        return $query->where('category_id', 3);
    }

    public function scopeInternationals($query)
    {
        return $query->where('category_id', 5);
    }

    public function scopeLocal($query)
    {
        return $query->where('category_id', 6);
    }

    public function scopeHealth($query)
    {
        return $query->where('category_id', 8);
    }

    public function scopeTech($query)
    {
        return $query->where('category_id', 2);
    }
}
