<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehiculo;
use Illuminate\Support\Facades\Storage;

class ViajeController extends Controller
{
    //
    public function index()
    {
        $viajes['vehiculos']=Vehiculo::all();
        return view('Viaje.index', $viajes);
    }
    /**
     *$viajes = Viaje::all();

     *return view('Viaje.index', compact('viajes'));
     */

 
     public function store(Request $request)
    {
        $vehiculos = new Vehiculo();
        if($request->hasFile('foto')){
            $vehiculos['foto']=$request->file('foto')->store('uploads','public');
        }

        $vehiculos->capacidad= $request->capacidad;
        $vehiculos->precio= $request->precio;
        $vehiculos->estatus= $request->estatus;

        $vehiculos->save();

        return redirect('viaje');
        
    }
}
