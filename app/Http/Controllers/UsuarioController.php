<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Storage;

class UsuarioController extends Controller
{
    //
    public function index()
    {
        $datos['usuarios']=Usuario::paginate(20);
        return view('Usuario.index', $datos);
        //return view('Previstas.create');

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Usuario.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuario = new Usuario();

        if($request->hasFile('foto')){
            $usuario['foto'] = $request->file('foto')->store('uploads', 'public');
        }

        $usuario->nombres= $request->nombres;
        $usuario->apellidos= $request->apellidos;
        $usuario->edad= $request->edad;
        $usuario->sexo= $request->sexo;
        $usuario->correo= $request->correo;
        //$usuario->foto= $request->foto;

        $usuario->save();

        return 'registro realizado';
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
    public function edit($idUsuarios)
    {
        //
        $us = Usuario::findOrFail($idUsuarios);
        return view('Auxiliar.edit', compact('us'));
    }

     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idUsuarios)
    {
        //
        $usuario = request()->except(['_token', '_method']);

        if($request->hasFile('foto')){
            $us = Usuario::findOrFail($idUsuarios);
            Storage::delete('public/'.$us->foto);
            
            $usuario['foto']=$request->file('foto')->store('uploads','public');
        }
        
        Usuario::where('idUsuarios', '=', $idUsuarios)->update($usuario);

        $us = Usuario::findOrFail($idUsuarios);
        return view('Usuario.edit', compact('us'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idUsuarios)
    {
        //
        $us = Usuario::findOrFail($idUsuarios);

        if(Storage::delete('public/' . $us->foto)){
           Usuario::destroy($idUsuarios); 
        }
        
        return redirect('usuario');
    }
}
