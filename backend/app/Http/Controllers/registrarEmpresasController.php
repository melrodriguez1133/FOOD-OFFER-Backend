<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\registrarEmpresas;

class registrarEmpresasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registrarEmpresas=registrarEmpresas::all(); //trae todos los registros
        return $registrarEmpresas;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
  /*  public function create()
    {
        //
    }
*/
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation= $request->validate([
            'nombreEmpresa' => 'required | alpha | min:4 | max: 20',
            'tipoNegocioE' => 'required | alpha | min:7 | max: 20',
            'descripcion' => ["required", "regex:/^[a-zA-ZÀ-ÿ0-9.,\s]+$/", "min:25", "max: 250"],
            'horariosAtencion' => 'required | regex:/^([0-2][0-9]:[0-5][0-9])(-)([0-2][0-9]:[0-5][0-9])+$/',
            'diasAtencion' => 'required | regex:/^[a-zA-Z\s-]+$/ | min:5 | max:50',
            'numeroCelular' => 'required | regex:/^[6-7][0-9]+$/ | digits:8',
            'numeroTelefono' => 'required | digits:7 | regex:/^4[0-9]+$/',
            'direccion' => 'required |regex:/^[a-zA-Z0-9\s#.,]+$/ | min:25 | max: 100',
            'correoEmpresa' => 'required | regex:/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/',
        ]);

        $registrarEmpresas=new registrarEmpresas();
        $registrarEmpresas->nombreEmpresa = $request->nombreEmpresa;
        $registrarEmpresas->tipoNegocioE = $request->tipoNegocioE;
        $registrarEmpresas->descripcion = $request->descripcion;
        $registrarEmpresas->horariosAtencion = $request->horariosAtencion;
        $registrarEmpresas->diasAtencion = $request->diasAtencion;
        $registrarEmpresas->numeroCelular = $request->numeroCelular;
        $registrarEmpresas->numeroTelefono = $request->numeroTelefono;
        $registrarEmpresas->direccion = $request->direccion;
        $registrarEmpresas->correoEmpresa = $request->correoEmpresa;

        $registrarEmpresas->save();
        return[];
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $registrarEmpresas=registrarEmpresas::find($id);
        return $registrarEmpresas;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*public function edit($id)
    {
        //
    }*/

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $registrarEmpresas = registrarEmpresas::findOrFail($request->id);
        $registrarEmpresas->nombreEmpresa = $request->nombreEmpresa;
        $registrarEmpresas->tipoNegocioE = $request->tipoNegocioE;
        $registrarEmpresas->descripcion = $request->descripcion;
        $registrarEmpresas->horariosAtencion = $request->horariosAtencion;
        $registrarEmpresas->diasAtencion = $request->diasAtencion;
        $registrarEmpresas->numeroCelular = $request->numeroCelular;
        $registrarEmpresas->numeroTelefono = $request->numeroTelefono;
        $registrarEmpresas->direccion = $request->direccion;
        $registrarEmpresas->correoEmpresa = $request->correoEmpresa;

        $registrarEmpresas->save();

        return $registrarEmpresas;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $registrarEmpresas = registrarEmpresas::destroy($id);

        return $registrarEmpresas;
    }
}