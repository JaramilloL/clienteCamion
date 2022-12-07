<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RegisterController extends Controller
{
    public function index(){
        return view('register');
    }
    
    public function register(Request $request){
        $token = Http::asForm()->post('http://apicamion.test/api/user/register',[
            'email'=>$request->email,
            'name'=>$request->name,
            'password'=>$request->password,
        ]);
        $object = json_decode($token);
        session(['token'=> $object->access_token]);
    
        //return redirect('plantilla');
        
        return $object->access_token;
    
    }
}
