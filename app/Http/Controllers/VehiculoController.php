<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehiculo;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Http;

class VehiculoController extends Controller
{
    //
    public function index()
    {
        $datos['vehiculos']=Vehiculo::paginate(20);
        return view('Vehiculo.index', $datos);
        //return view('Previstas.create');
        $ve = Http::get('http://api.test/api/vehiculo');
        //la guardamos en un json para mostrarla
        $auxArray = $ve->json();
        return view('Tablas.TablaV', compact('auxArray'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Vehiculo.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vehiculo = new Vehiculo();
        if($request->hasFile('foto')){
            $vehiculo['foto']=$request->file('foto')->store('uploads','public');
        }

        $vehiculo->marca= $request->marca;
        $vehiculo->modelo= $request->modelo;
        $vehiculo->color= $request->color;
        $vehiculo->destino= $request->destino;
        $vehiculo->placas= $request->placas;
        $vehiculo->tipo= $request->tipo;
        $vehiculo->capasidad= $request->capasidad;
        $vehiculo->precio= $request->precio;
        //$vehiculo->foto= $request->foto;
        $vehiculo->estatus= $request->estatus;

        $vehiculo->save();

        return redirect('vehiculo');
        return response()->json();
        
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
    public function edit($idVehiculos)
    {
        //
        //vemo si existe este campo 
        $vehi = Vehiculo::findOrFail($idVehiculos);
        return view('Vehiculo.edit', compact('vehi'));
    }

     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idVehiculos)
    {
        //
        $vehiculo = request()->except(['_token', '_method']);

        if($request->hasFile('foto')){
            $vehi = Vehiculo::findOrFail($idVehiculos);
            Storage::delete('public/'.$vehi->foto);
            
            $vehiculo['foto']=$request->file('foto')->store('uploads','public');
        }
        
        Vehiculo::where('idVehiculos', '=', $idVehiculos)->update($vehiculo);

        $vehi = Vehiculo::findOrFail($idVehiculos);
        return view('Vehiculo.edit', compact('vehi'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idVehiculos)
    {
        //
        $vehi = Vehiculo::findOrFail($idVehiculos);

        if(Storage::delete('public/' . $vehi->foto)){
           Vehiculo::destroy($idVehiculos); 
        }
        
        return redirect('vehiculo');
    }
}
