<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    //

    public function user(){
        return $this->belongsTo(User::class);
    }
    
    public function comment(){
        return $this->hasMany(Comment::class)->orderBy('created_at','DESC');
    }

}

