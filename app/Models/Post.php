<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;


class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title','body','photo_id','category_id','slug'];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }


    public function photo(){
        return $this->belongsTo('App\Models\Photo');
    }

    public function category(){
        return $this->belongsTo('App\Models\Category');
    }

    public function comment(){
        return $this->hasMany('App\Models\Comment','id');
    }

    public function reply(){
        return $this->belongsTo('App\Models\CommentReply');
    }
    

    
}
