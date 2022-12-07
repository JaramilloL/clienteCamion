<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jefe;
use Illuminate\Support\Facades\Storage;

class JefeController extends Controller
{
    //
    public function index()
    {
        $datos['jefes']=Jefe::paginate(20);
        return view('Jefe.index', $datos);
        //return view('Previstas.create');

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Jefe.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jefe = new Jefe();
        if($request->hasFile('foto')){
            $jefe['foto']=$request->file('foto')->store('uploads','public');
        }

        $jefe->nombre= $request->nombre;
        $jefe->edad= $request->edad;
        $jefe->correo= $request->correo;
        $jefe->telefono= $request->telefono;
        //$jefe->foto= $request->foto;

        $jefe->save();

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
    public function edit($idJefes)
    {
        //
        $jef = Jefe::findOrFail($idJefes);
        return view('Jefe.edit', compact('jef'));
    }

     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idJefes)
    {
        //
        $jefe = request()->except(['_token', '_method']);

        if($request->hasFile('foto')){
            $jef = Jefe::findOrFail($idJefes);
            Storage::delete('public/'.$jef->foto);
            
            $jefe['foto']=$request->file('foto')->store('uploads','public');
        }
        
        Jefe::where('idJefes', '=', $idJefes)->update($jefe);

        $jef = Jefe::findOrFail($idJefes);
        return view('Jefe.edit', compact('jef'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idJefes)
    {
        //
        $jef = Jefe::findOrFail($idJefes);

        if(Storage::delete('public/' . $jef->foto)){
           Jefe::destroy($idJefes); 
        }
        
        return redirect('jefe');
        
    }
}
