<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use Illuminate\Support\Facades\Hash;
class ApiController extends Controller
{
    //

    public function login(request $request){


       $data = user::where(['email'=>$request->email, 'password'=>$request->pass])->first()
       ->with('pets','teams.pets')->get();

        return response()->json($data, 200);


    }
}
