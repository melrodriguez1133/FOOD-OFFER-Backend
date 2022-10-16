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
        $registrarEmpresas=new registrarEmpresas();
        $registrarEmpresas->nombreEmpresa = $request->nombreEmpresa;
        $registrarEmpresas->tipoNegocio = $request->tipoNegocio;
        $registrarEmpresas->Descripcion = $request->Descripcion;
        $registrarEmpresas->dias = $request->dias;
        $registrarEmpresas->numerosContactos = $request->numerosContactos;
        $registrarEmpresas->correoEmpresa = $request->correoEmpresa;
        $registrarEmpresas->numeroSucursales = $request->numeroSucursales;
        $registrarEmpresas->direccionesSucursales = $request->direccionesSucursales;

        $registrarEmpresas->save();

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
    public function edit($id)
    {
        //
    }

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
        $registrarEmpresas->tipoNegocio = $request->tipoNegocio;
        $registrarEmpresas->Descripcion = $request->Descripcion;
        $registrarEmpresas->dias = $request->dias;
        $registrarEmpresas->numerosContactos = $request->numerosContactos;
        $registrarEmpresas->correoEmpresa = $request->correoEmpresa;
        $registrarEmpresas->numeroSucursales = $request->numeroSucursales;
        $registrarEmpresas->direccionesSucursales = $request->direccionesSucursales;

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
        $registrarEmpresas = registrarEmpresas::destroy($request->id);

        return $registrarEmpresas;
    }
}
