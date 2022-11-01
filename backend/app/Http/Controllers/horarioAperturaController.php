<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\horarioApertura;

class horarioAperturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $horarioApertura=horarioApertura::all(); //trae todos los horarios
        return $horarioApertura;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $horarioApertura=new horarioApertura();
        $horarioApertura->nombreValor = $request->nombreValor;
      
        $horarioApertura->save();
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
        $horarioApertura = horarioApertura::findOrFail($request->id);
        $horarioApertura->nombreValor = $request->nombreValor;
        $horarioApertura->save();
        return $horarioApertura;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $horarioApertura = horarioApertura::destroy($request->id);

        return $horarioApertura;
    }
}
