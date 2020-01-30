<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class monster_stage extends Model
{
    //
    protected $table = 'monster_stage';

    public function monster(){
        return $this->belongsTo('App\monster');
    }

    public function stage(){
        return $this->belongsTo('App\stage');
    }
}
