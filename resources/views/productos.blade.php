<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Productos</title>
</head>
<body>
    <div><a href="{{route('formCrearProducto')}}"><button>Agregar Nuevo Producto</button></a></div>
    <div><h1>Lista de Productos</h1></div>
    <div>
        <table>
            <thead>
                <th>Id</th>
                <th>Descripcion</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Paga Isv</th>
            </thead>
            <tbody>
                @foreach ($productos as $producto)
                    <tr>
                        <th>{{$producto->id}}</th>
                        <th>{{$producto->descripcion}}</th>
                        <th>{{$producto->precio}}</th>
                        <th>{{$producto->stock}}</th>
                        <th>{{$producto->pagaIsv}}</th>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div></div>
</body>
</html>