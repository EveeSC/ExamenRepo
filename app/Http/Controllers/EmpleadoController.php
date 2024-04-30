<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    public function verEmpleados(){
        $empleados = Empleado::all();
        return view('empleados', compact('empleados'));
    }

    public function formCrearEmpleado(){
        return view('crearEmpleado');
    }

    public function guardarNuevoEmpleado(Request $request){
        $nvoEmpleado = new Empleado;
        $nvoEmpleado->nombre = $request->input('nombreEmpleado');
        $nvoEmpleado->apellido = $request->input('apellidoEmpleado');
        $nvoEmpleado->fechaIngreso = $request->input('fechaIngresoEmpleado');
        $nvoEmpleado->salario= $request->input('salarioEmpleado');
        $nvoEmpleado->save();

        return redirect('/inicio/empleados');
    }

}
