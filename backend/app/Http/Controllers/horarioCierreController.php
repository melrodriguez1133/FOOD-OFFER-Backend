<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\horarioCierre;

class horarioCierreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $horarioCierre=horarioCierre::all(); //trae todos los horarios
        return $horarioCierre;
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
        $horarioCierre=new horarioCierre();
        $horarioCierre->nombreValor = $request->nombreValor;
      
        $horarioCierre->save();
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
        $horarioCierre = horarioCierre::findOrFail($request->id);
        $horarioCierre->nombreValor = $request->nombreValor;
        $horarioCierre->save();
        return $horarioCierre;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $horarioCierre = horarioCierre::destroy($request->id);

        return $horarioCierre;
    }
}
