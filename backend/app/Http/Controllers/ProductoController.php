<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Producto;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $producto=Producto::all(); //trae todos los registros
        return $producto;
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
        $request->validate([
            'nombreProducto' => 'required | min:4 | max: 20',
            'descripcion' => 'required | min:25 | max: 250',
            'precio' => 'required',
            'fechaElaboracion' => 'required',
            'fechaVencimiento' => 'required',
            'fechaOferta' => 'required',
            'stock' => 'required | min_digits:1 | max_digits:3',
            'imagen' => 'required',
            'id_categoria' => 'required',
        ]);

        $producto=new Producto();
        $producto->nombreProducto = $request->nombreProducto;
        $producto->descripcion = $request->descripcion;
        $producto->precio = $request->precio;
        $producto->fechaElaboracion = $request->fechaElaboracion;
        $producto->fechaVencimiento = $request->fechaVencimiento;
        $producto->fechaOferta = $request->fechaOferta;
        $producto->stock = $request->stock;
        $producto->imagen = $request->imagen;
        $producto->id_categoria = $request->id_categoria;

        $producto->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $producto=Producto::find($id);
        return $producto;
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
        $producto = Producto::findOrFail($request->id);
        $producto->nombreProducto = $request->nombreProducto;
        $producto->descripcion = $request->descripcion;
        $producto->precio = $request->precio;
        $producto->fechaElaboracion = $request->fechaElaboracion;
        $producto->fechaVencimiento = $request->fechaVencimiento;
        $producto->fechaOferta = $request->fechaOferta;
        $producto->stock = $request->stock;
        $producto->imagen = $request->imagen;
        $producto->id_categoria = $request->id_categoria;

        $producto->save();

        return $producto;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto = Producto::destroy($id);

        return $producto;
    }
}
