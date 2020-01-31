<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class member extends Model
{
    //
    public function team(){

        return $this->hasOne('App\team');
    }

    public function pet(){
        return $this->hasOne('App\pet');
    }
    protected $hidden = [
        "created_at", "updated_at"
    ];




}
