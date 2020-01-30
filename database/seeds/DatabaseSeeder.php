<?php

use Illuminate\Database\Seeder;
use App\map;
use App\region;
use App\stage;
use App\monster;
use App\monster_stage;
use App\User;
use App\pet;
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
        $u->email = 'a q';
        $u->password = bcrypt('123456678');
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

        $monster_stage = new monster_stage();
        $monster_stage->stage_id = 1;
        $monster_stage->monster_id  = 1;
        $monster_stage->save();
        


    }
}
