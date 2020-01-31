<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class team extends Model
{
    //

    public function pets()
    {
        return $this->belongsToMany('App\pet','members');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    protected $hidden = [
        "created_at", "updated_at"
    ];

}
