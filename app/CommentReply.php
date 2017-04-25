<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommentReply extends Model
{
    //
    protected $fillable = [
        'comment_id',
        'author',
        'email',
        'content',
        'is_active',
        'image'
    ];

    public function comment(){
        return $this->belongsTo('App\Comment');
    }
}
