<?php

use Illuminate\Database\Seeder;
use App\map;
use App\region;
use App\stage;
use App\monster;
use App\encounter;
use App\User;
use App\pet;
use App\team;
use App\member;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        $r = new region();
        $r->nombre = 'kanto';
        $r->save();

        $m = new map();
        $m->nombre = 'Ruta 1';
        $m->region_id = $r->id;
        $m->save();

        for($i = 1; $i <= 5; $i++)
        {
            $stage = new stage();
            $stage->index = $i;
            $stage->level = $i * 3;
            $stage->map_id = $m->id;
            $stage->save();
        }

        //
        $u = new User();
        $u->name = 'ivan';
        $u->email = 'sambranaivan@gmail.com';
        $u->password = '12345678';
        $u->save();

        ///monster
        $monster = new monster();
        $monster->num  = 1;
        $monster->species = 'bulbasaur';
        $monster->save();

        $pet = new pet();
        $pet->user_id = $u->id;
        $pet->monster_id = $monster->id;
        $pet->save();

        $encounter = new encounter();
        $encounter->stage_id = 1;
        $encounter->monster_id  = 1;
        $encounter->save();

        ///team

        $team = new team();
        $team->index = 1;
        $team->user_id = $u->id;
        $team->save();


        $member = new member();
        $member->team_id = $team->id;
        $member->pet_id = $pet->id;
        $member->save();


    }
}
