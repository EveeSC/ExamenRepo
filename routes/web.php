<?php

use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

Route::get('/inicio', function () {
    return view('inicio');
})->name('inicio');

Route::get('/inicio/empleados', [EmpleadoController::class, 'verEmpleados'])->name('verEmpleados');
Route::get('/inicio/empleados/crear', [EmpleadoController::class, 'formCrearEmpleado'])->name('formCrearEmpleado');
Route::post('/inicio/empleados/guardar', [EmpleadoController::class, 'guardarNuevoEmpleado'])->name('guardarNuevoEmpleado');

Route::get('/inicio/productos', [ProductoController::class, 'verProductos'])->name('verProductos');
Route::get('/inicio/productos/crear', [ProductoController::class, 'formCrearProducto'])->name('formCrearProducto');

