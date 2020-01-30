<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class region extends Model
{
    //

    public function maps(){
        return $this->hasMany('App\map');
    }
}
