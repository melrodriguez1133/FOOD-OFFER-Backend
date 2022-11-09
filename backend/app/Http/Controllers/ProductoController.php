<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File as Files;
use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Producto;
use App\Models\File;
use Illuminate\Support\Facades\Validator;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getimages($img)
    {
        $dir = storage_path("app/products/$img");
        $tipo = Files::mimeType($dir);
      
        return response()->File($dir, ["content-Type"=> $tipo]);
    }

    public function index()
    {
        $producto=Producto::all(); //trae todos los registros
        $productoNuevo=[];
        foreach($producto as $item){
            $item->imagen="http://127.0.0.1:8000/api/Producto/imagen/$item->imagen";
            array_push($productoNuevo,$item);
        }
        return $productoNuevo;
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
        $product = json_decode($request->product, true);
        
        $conditions=[
            'nombreProducto' => 'required | min:4 | max: 20',
            'descripcion' => 'required | min:25 | max: 250',
            'precio' => 'required',
            'fechaElaboracion' => 'required',
            'fechaVencimiento' => 'required',
            'fechaOferta' => 'required',
            'stock' => 'required | min_digits:1 | max_digits:3',
            //'imagen' => 'required | image | max:2048',
            'id_categoria' => 'required',
        ];

        $validator = Validator::make($product, $conditions);

        if($validator->passes()){
            $producto = new Producto();

            $uploadFile = new File();

            $producto->nombreProducto = $product['nombreProducto'];
            $producto->descripcion = $product['descripcion'];
            $producto->precio = $product['precio'];
            $producto->fechaElaboracion = $product['fechaElaboracion'];
            $producto->fechaVencimiento = $product['fechaVencimiento'];
            $producto->fechaOferta = $product['fechaOferta'];
            $producto->stock = $product['stock'];
            $producto->imagen = $uploadFile->upload($request, 'products');
            $producto->id_categoria = $product['id_categoria'];

            $producto->save();

            return $product;
        }else{
            return [$validator->errors()];
        }
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
        $categoria=Categoria::find($producto->id_categoria);
        $producto->id_categoria = $categoria->descripcion;
        $producto->imagen="http://127.0.0.1:8000/api/Producto/imagen/$producto->imagen";
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
