<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pet extends Model
{
    //

    public function user(){
        return $this->belongsTo('App\user');
    }

    public function monster(){
        return $this->belongsTo('App\monster');
    }
}
