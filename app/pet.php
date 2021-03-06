<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pet extends Model
{
    //

    public function user(){
        return $this->belongsTo('App\user');
    }


    public function teams()
    {
        return $this->belongsToMany('App\team','members');
    }


    public function monster(){
        return $this->belongsTo('App\monster');
    }
    protected $hidden = [
        "created_at", "updated_at"
    ];

}
