<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
        "created_at","updated_at"
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function teams(){
        return $this->hasMany('App\team');
    }

    public function pets(){
        return $this->hasMany('App\pet');
    }

    public function capture($monster_id,$level)
    {
        $pet = new pet();
        $pet->level = $level;
        $pet->monster_id = $monster_id;
        $pet->user_id = $this->id;
        $pet->save();
        return $pet;
    }

    public function createTeam()
    {
        $team = new team();
        $team->user_id = $this->id;
        $team->index = 1;
        $team->save();
        return $team;
    }
}
