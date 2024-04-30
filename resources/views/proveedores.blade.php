<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Empleados</title>
</head>
<body>
    <div><a href="{{route('formCrearProveedor')}}"><button>Agregar Nuevo Proveedor</button></a></div>
    <div><h1>Lista de Proveedores</h1></div>
    <div>
        <table>
            <thead>
                <th>Id Proveedor</th>
                <th>Nombre</th>
                <th>Fecha Registro</th>
                <th>Telefono</th>
                <th>Correo</th>
            </thead>
            <tbody>
                @foreach ($proveedores as $proveedor)
                    <tr>
                        <th>{{$proveedor->idProveedor}}</th>
                        <th>{{$proveedor->nombre}}</th>
                        <th>{{$proveedor->fechaRegistro}}</th>
                        <th>{{$proveedor->telefono}}</th>
                        <th>{{$proveedor->correo}}</th>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div></div>
</body>
</html>