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
}
