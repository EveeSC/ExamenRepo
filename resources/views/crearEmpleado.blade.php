<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Empleado</title>
</head>
<body>
    <div><h1>Formulario de Registro de Empleado</h1></div>
    <div>
        <form action="{{route('guardarNuevoEmpleado')}}" method="POST">
            @csrf
            <label for="nombre">Nombre</label>
            <input type="text" name="nombreEmpleado"> <br>
            <label for="apellido">Apellido</label>
            <input type="text" name="apellidoEmpleado"> <br>
            <label for="fechaIngreso">Fecha de Ingreso</label>
            <input type="text" name="fechaIngresoEmpleado"> <br>
            <label for="salario">Salario</label>
            <input type="text" name="salarioEmpleado"> <br>
            <button type="submit">Guardar</button>
        </form>
        <div><a href=""><button>Volver</button></a></div>
    </div>
</body>
</html>