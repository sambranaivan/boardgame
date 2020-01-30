<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class map extends Model
{
    //

    public function stages(){
        return $this->hasMany('App\stage');
    }

    public function region(){
        return $this->belongsTo('App\region');
    }
}
