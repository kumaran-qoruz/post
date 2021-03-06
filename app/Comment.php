<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }


    public function post()
    {
        return $this->belongsTo(Post::class, 'title');
    }

    public function replies()
    {
        return $this->hasMany(CommentReply::class);
    }
}
