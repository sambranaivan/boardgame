<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class member extends Model
{
    //
    public function team(){
        return $this->BelongsTo('App\team');
    }

    public function hasOne(){
        return $this->hasOne('App\pet');
    }
}
