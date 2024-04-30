<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agregar Producto</title>
</head>
<body>
    <div><h1>Formulario Para Agregar Producto</h1></div>
    <div>
        <form action="{{route('guardarNuevoProducto')}}" method="POST">
            @csrf
            <label for="descripcionProducto">Descripcion</label>
            <input type="text" name="descripcionProducto"> <br>
            <label for="precioProducto">Precio</label>
            <input type="text" name="precioProducto"> <br>
            <label for="stockProducto">Stock</label>
            <input type="text" name="stockProducto"> <br>
            <label for="salario">Salario</label>
            <input type="text" name="salarioEmpleado"> <br>
            <button type="submit">Guardar</button>
        </form>
        <div><a href=""><button>Volver</button></a></div>
    </div>
</body>
</html>