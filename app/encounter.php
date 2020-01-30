<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class encounter extends Model
{
    //
    protected $table = 'encounter';

    public function monster(){
        return $this->belongsTo('App\monster');
    }

    public function stage(){
        return $this->belongsTo('App\stage');
    }
}
