<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class monster extends Model
{
    //
    public function stages()
    {
        return $this->belongsToMany('App\stage');
    }

    protected $hidden = [
        "created_at", "updated_at"
    ];


}
