<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //$data = $request->input();
    // return $data;
    //$data = $request->input();
    //$request->session()->put('user', $data['user']);
    public function login(Request $request){
        if (!$request->session()->has('user')) {
            return 'no hay registros';
        }else{
            $data = $request->session()->all();
            return $data;
        }
    }
}
