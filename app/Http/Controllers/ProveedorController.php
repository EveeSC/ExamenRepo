<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{   
    public function verProveedores(){
        $proveedores = Proveedor::all();
        return view('proveedores', compact('proveedores'));
    }

    public function formCrearProveedor(){
        return view('crearProveedor');
    }

    public function guardarNuevoProveedor(Request $request){
        $nvoProveedor = new Proveedor;
        $nvoProveedor->nombre = $request->input('nombreProveedor');
        $nvoProveedor->fechaRegistro = $request->input('fechaRegistro');
        $nvoProveedor->telefono = $request->input('telefonoProveedor');
        $nvoProveedor->correo= $request->input('correo');
        $nvoProveedor->save();

        return redirect('/inicio/proveedores');
    }
}
