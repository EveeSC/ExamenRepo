<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Empleados</title>
</head>
<body>
    <div><a href="{{route('formCrearEmpleado')}}"><button>Agregar Nuevo Empleado</button></a></div>
    <div><h1>Lista de Empleados</h1></div>
    <div>
        <table>
            <thead>
                <th>#Prestamo</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Fecha de Ingreso</th>
                <th>Salario</th>
            </thead>
            <tbody>
                @foreach ($empleados as $empleado)
                    <tr>
                        <th>{{$empleado->idPrestamo}}</th>
                        <th>{{$empleado->nombre}}</th>
                        <th>{{$empleado->apellido}}</th>
                        <th>{{$empleado->fechaIngreso}}</th>
                        <th>{{$empleado->salario}}</th>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div></div>
</body>
</html>