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

        $user = user::where('uuid', $request->uuid)
            ->with('pets', 'teams.pets')->first();

        if ($user) {
            return response()->json($user, 200);
        } else {

            $this->crearUsuario($request->uuid);
            $user = user::where('uuid', $request->uuid)
                ->with('pets', 'teams.pets')->first();
            return response()->json($user, 200);
        }
    }

    public function crearUsuario($uuid)
    {
        ///creo usuario
        $user = new user();
        $user->uuid = $uuid;
        $user->save();
        ///creo un team y agrego un pet
        $user->createTeam($user->capture(1,5));


    }
}
