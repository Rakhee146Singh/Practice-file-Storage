<?php

namespace App\Models;


use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    // public function title(): Attribute
    // {
    //     return Attribute::make(

    //         set: fn ($value) => [
    //             'slug' => Str::slug($value),
    //             'title' => $value
    //         ]
    //     );
    // }


    //with boot method fetching data for slug using title
    // protected static function boot()
    // {
    //     parent::boot();

    //     static::saving(function ($post) {
    //         $post->slug = Str::slug($post->title);
    //     });

    //     static::deleted(function ($post) {
    //         $post->comments()->delete();
    //     });
    // }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
