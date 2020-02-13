<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

Class Comment extends Model {
    protected $fillable = ['id','post_id','user_id','content'];
    protected $hidden = ['created_at','updated_at'];

    public function post() {
        return $this->belongsTo('App\Post');
    }
}