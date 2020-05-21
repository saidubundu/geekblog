<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    //
    use SoftDeletes;

    protected $fillable=['title','body','image','published_at','user_id', 'category_id'];
    protected $dates = ['published_at'];

//    public function setTitleAttribute($value)
//    {
//        $this->attributes['title'] = $value;
//        $this->attributes['slug'] = str_slug($value);
//    }

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

    public function getUserUrlAttribute()
    {
        return route('user', $this->user->id);
    }

    public function getUrlAttribute()
    {
        return route('blog.show', $this->id);
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function scopePublished($query)
    {
        return $query->where('published_at' , '<=', Carbon::now());
    }

    public function scopeScheduled($query)
    {
        return $query->where("published_at", ">", Carbon::now());
    }

    public function scopeDraft($query)
    {
        return $query->whereNull("published_at");
    }

    public function getDateAttribute()
    {
        return is_null($this->published_at) ? '' : $this->published_at->diffForHumans();
    }

    public function dateFormatted($showTimes = false)
    {
        $format = "d/m/Y";
        if ($showTimes) $format = $format . "H:i:s";
        return $this->created_at->format($format);
    }

    public function publicationLabel()
    {
        if (! $this->published_at){
            return '<span class="badge badge-warning">Draft</span>';
        }
        elseif ($this->published_at && $this->published_at->isFuture()){
            return '<span class="badge badge-info">Schedule</span>';
        }
        else{
            return '<span class="badge badge-success">Published</span>';
        }
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
