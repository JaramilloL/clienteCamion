<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conductor;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class ConductorController extends Controller
{
    //
    public function index()
    {
        /*$datoss['conductores']=Conductor::paginate(20);
        return view('Conductor.index', $datoss);
        //return view('Previstas.create');*/

        if(session()->has('token')){
            $value = session('token');
            $datos = Http::withToken($value)->get('http://apicamion.test/api/conductor');
            $objeto = json_decode($datos);
            $conductores = $objeto->conductores;
            return view('Conductor.index',compact('conductores'));
            } else{
                return redirect('login');
            }

    }
     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(session()->has('token')){
            return view('Conductor.create');
        } else{
            return redirect('login');
        }
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $conductor = new Conductor();
        if(session()->has('token')){
            $value = session('token');
        Http::withToken($value)->attach(
            'foto', file_get_contents($request->foto),'foto'
        )->post('http://apicamion.test/api/conductor',[
            'nombre'=> $request->nombre,
            'apellido'=> $request->apellido,
            'licencia'=> $request->licencia,
            'correo'=> $request->correo
        ]);
        return redirect('conductor');
        } else{
            return redirect('login');
        }
    }

     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idConductores)
    {
        //
        //vemo si existe este campo 
        ;
        if(session()->has('token')){
            $value = session('token');
        $datos = Http::withToken($value)->get('http://apicamion.test/api/conductor/'.$idConductores);
        $objeto = json_decode($datos);
        $con = $objeto->con;
        return view('Conductor.edit',compact('con'));
        } else{
            return redirect('login');
        }
    }

     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idConductores)
    {
        //
        if(session()->has('token')){
            $value = session('token');

        Http::withToken($value)->attach(
            'foto', file_get_contents($request->foto),'foto'
        )->post('http://apicamion.test/api/conductor/'.$idConductores,[
            'nombre'=> $request->nombre,
            'apellido'=> $request->apellido,
            'licencia'=> $request->licencia,
            'correo'=> $request->correo,
            '_method'=>'PUT',
            '_token'=>$request->_token
        ]);
        return redirect('conductor');
        } else{
            return redirect('login');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idConductores)
    {
        //
        if(session()->has('token')){
            $value = session('token');
        Http::withToken($value)->post('http://apicamion.test/api/conductor/'.$idConductores,[
            '_method'=>'DELETE'
        ]);
        return redirect('conductor'); 
        } else{
            return redirect('login');
        }
    }
}
