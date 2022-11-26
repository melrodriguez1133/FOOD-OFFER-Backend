<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;


class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios=Usuario::all(); //trae todos los registros
        return $usuarios;
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
        $validation= $request->validate([
            'nombre' => 'required |min: 3 |max: 30 ',
            'edad' => 'required | numeric | digits:2',
            'apellido' => 'required |min: 3 | max: 40',
            'direccion' => 'required |min: 15 |max: 50',
            'celular' => 'required |numeric| digits:8',
            'genero' => 'required',
            'ci' => 'required |numeric| digits_between:6,10 ',
            'expedido' => 'required |alpha| min:2 | max:4'  ,
            'email' => 'required',
            'password' => 'required |min:6|max:15' ,
        ]);

        $usuarios=new Usuario();
        $usuarios->nombre = $request->nombre;
        $usuarios->apellido = $request->apellido;
        $usuarios->edad = $request->edad;
        $usuarios->direccion = $request->direccion;
        $usuarios->celular = $request->celular;
        $usuarios->genero = $request->genero;
        $usuarios->ci = $request->ci;
        $usuarios->expedido = $request->expedido;
        $usuarios->email = $request->email;
        $usuarios->password = $request->password;
        $usuarios->save();
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
        $usuarios = Usuario::findOrFail($request->id);
        $usuarios->nombre = $request->nombre;
        $usuarios->edad = $request->edad;
        $usuarios->apellido = $request->apellido;
        $usuarios->direccion = $request->direccion;
        $usuarios->celular = $request->celular;
        $usuarios->genero = $request->genero;
        $usuarios->ci = $request->ci;
        $usuarios->expedido = $request->expedido;
        $usuarios->email = $request->email;
        $usuarios->password = $request->password;

        $usuarios->save();

        return $usuarios;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuarios = Usuario::destroy($id);

        return $usuarios;
    }
}
