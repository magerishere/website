<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'post_id',
        'is_active',
        'author',
        'email',
        'body'
    ];

    public function commentReply(){
        return $this->hasMany('App\Models\CommentReply');
    }
}
