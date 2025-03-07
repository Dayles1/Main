<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $fillable = ['title', 'description', 'image', 'user_id'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
    // В модели Post



    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}
