<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function verProductos(){
        $productos=Producto::all();
        return view('productos', compact('productos'));
    }

    public function formCrearProducto(){
        return view('crearProductos');
    }

    public function guardarNuevoProducto(Request $request){
        $nvoProducto = new Producto;
        $nvoProducto->descripcion = $request->input('descripcionProducto');
        $nvoProducto->precio = $request->input('precioProducto');
        $nvoProducto->stock = $request->input('stockProducto');
        $nvoProducto->pagaIsv= $request->input('pagaIsv');
        $nvoProducto->save();

        return redirect('/inicio/productos');
    }
}
