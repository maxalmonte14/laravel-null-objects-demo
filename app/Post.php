<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class)->withDefault(
            MissingUser::make(['id' => $this->user_id])->toArray()
        );
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
