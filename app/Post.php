<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model{
    protected $fillable = ['id','user_id'];
    protected $hidden = ['created_at','uppdated_at'];

    public function comments(){
        return $this->hasMany('App\Comment');
    }
}