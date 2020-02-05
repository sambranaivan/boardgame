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


    public function addMember($pet)
    {
        // $member = member::where(['team_id'=>$this->id,'pet_id'=>$pet->id])->first();
        $member = new member();
        $member->team_id = $this->id;
        $member->pet_id = $pet->id;
    }

}
