<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.login');
    }

    public function login(Request $request){
        $respuesta= Http::asForm()->withHeaders([
            'Accept' => 'application/json'
        ])->post('http://apicamion.test/api/user/login',[
            'email'=>$request->email,
            'password'=>$request->password
        ]);
        $objeto = json_decode($respuesta);
        session(['token' => $objeto->access_token]);
        
        return redirect('auxiliar');
    }
    public function logout(){
        session()->flush();
        return redirect('login');
    }
}
