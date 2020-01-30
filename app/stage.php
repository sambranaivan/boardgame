<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class stage extends Model
{
    //
    public function monsters(){
        return $this->hasManyThrough('App\monster','App\monster_stage');
    }
}
