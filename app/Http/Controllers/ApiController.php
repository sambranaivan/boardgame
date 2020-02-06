<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use Illuminate\Support\Facades\Hash;

class ApiController extends Controller
{
    //

    public function login(request $request)
    {

        $user = user::where('uuid', $request->uuid)->first();
            // ->with('pets', 'teams.pets')->first();

        if ($user) {
            return response()->json((object)["data"=>"Logueado", "user"=>$user], 200);
        } else {

            $user = new user();
            $user->uuid = $request->uuid;
            $user->save();
            // $user = user::where('uuid', $request->uuid)->first();
                // ->with('pets', 'teams.pets')->first();
            return response()->json((object)["data"=>"Usuario Creado", "user"=>$user], 200);
        }
    }

  

    public function selectInitial(request $request)
    {

        $user = user::find($request->user_id);
        // $user->capture($request->monster_id,5);
           // $user->createTeam($user->capture(1,5));
        return response()->json((object)["data"=>'Inicial Seleccionado',"user"=>$user], 200);
    }
}
