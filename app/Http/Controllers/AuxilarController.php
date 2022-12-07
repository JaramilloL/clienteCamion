<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Auxilar;
use Illuminate\Support\Facades\Http;
//use Illuminate\Support\Facades\Storage;

class AuxilarController extends Controller
{
    //
    public function index()
    {
        if(session()->has('token')){
            $value = session('token');
            $datos = Http::withToken($value)->get('http://apic.test/api/auxiliar');
            $objeto = json_decode($datos);
            $auxiliares = $objeto-> auxiliares;
            return view('Auxiliar.index',compact('auxiliares'));
            } else{
                return redirect('login');
            }

       /* $datos['auxiliares'] = Auxilar::paginate(30);
        return view('Auxiliar.index', $datos);
        //return view('Previstas.create');
        
        $auxiliar = $objeto->auxiliar;
            return view('Auxiliar.index',compact('auxiliar'));*/
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(session()->has('token')){
                return view('Auxiliar.create');
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
        if(session()->has('token')){
            $value = session('token');
        Http::withToken($value)->attach(
            'foto', file_get_contents($request->foto),'foto'
        )->post('http://apicamion.test/api/auxiliar',[
            'nombre'=> $request->nombre,
            'apellido'=> $request->apellido,
            'status'=> $request->status,
            'sexo'=> $request->sexo
        ]);
        return redirect('auxiliar');
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
    public function edit($idAuxiliares)
    {
        if(session()->has('token')){
            $value = session('token');
        $datos = Http::withToken($value)->get('http://apicamion.test/api/auxiliar/'.$idAuxiliares);
        $objeto = json_decode($datos);
        $auxiliares = $objeto->auxiliares;
        return view('Auxiliar.edit',compact('auxiliares'));
        } else{
            return redirect('login');
        }
        /*//vemo si existe este campo 
        $aux = Auxilar::findOrFail($idAuxiliares);
        return view('Auxiliar.edit', compact('aux'));*/
    }

     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idAuxiliares)
    {
        if(session()->has('token')){
            $value = session('token');

        Http::withToken($value)->attach(
            'foto', file_get_contents($request->foto),'foto'
        )->post('http://apicamion.test/api/auxiliar/'.$idAuxiliares,[
            'nombre'=> $request->nombre,
            'apellido'=> $request->apellido,
            'status'=> $request->status,
            'sexo'=> $request->sexo,
            '_method'=>'PUT',
            '_token'=>$request->_token
        ]);
        return redirect('auxiliar');
        } else{
            return redirect('login');
        }

        /*$auxiliar = request()->except(['_token', '_method']);

        if($request->hasFile('foto')){
            $aux = Auxilar::findOrFail($idAuxiliares);
            Storage::delete('public/'.$aux->foto);
            
            $auxiliar['foto']=$request->file('foto')->store('uploads','public');
        }
        
        Auxilar::where('idAuxiliares', '=', $idAuxiliares)->update($auxiliar);

        $aux = Auxilar::findOrFail($idAuxiliares);
        return view('Auxiliar.edit', compact('aux'));*/
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @param App\Models\Auxilar $aux
     * @return \Illuminate\Http\Response
     */
    public function destroy($idAuxiliares)
    {
        if(session()->has('token')){
            $value = session('token');
        Http::withToken($value)->post('http://apicamion.test/api/auxiliar/'.$idAuxiliares,[
            '_method'=>'DELETE'
        ]);
        return redirect('auxiliar'); 
        } else{
            return redirect('login');
        }
        
        /*$aux = Auxilar::findOrFail($idAuxiliares);

        if(Storage::delete('public/' . $aux->foto)){
           Auxilar::destroy($idAuxiliares); 
        }
        
        return redirect('auxiliar');*/
        
    }
}
