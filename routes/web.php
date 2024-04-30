<?php

use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedorController;
use Illuminate\Support\Facades\Route;

Route::get('/inicio', function () {
    return view('inicio');
})->name('inicio');

Route::get('/inicio/empleados', [EmpleadoController::class, 'verEmpleados'])->name('verEmpleados');
Route::get('/inicio/empleados/crear', [EmpleadoController::class, 'formCrearEmpleado'])->name('formCrearEmpleado');
Route::post('/inicio/empleados/guardar', [EmpleadoController::class, 'guardarNuevoEmpleado'])->name('guardarNuevoEmpleado');

Route::get('/inicio/productos', [ProductoController::class, 'verProductos'])->name('verProductos');
Route::get('/inicio/productos/crear', [ProductoController::class, 'formCrearProducto'])->name('formCrearProducto');
Route::post('/inicio/productos/guardar', [ProductoController::class, 'guardarNuevoProducto'])->name('guardarNuevoProducto');

Route::get('/inicio/proveedores', [ProveedorController::class, 'verProveedores'])->name('verProveedores');
Route::get('/inicio/proveedores/crear', [ProveedorController::class, 'formCrearProveedor'])->name('formCrearProveedor');
Route::post('/inicio/proveedores/guardar', [ProveedorController::class, 'guardarNuevoProveedor'])->name('guardarNuevoProveedor');
