<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Proveedor</title>
</head>
<body>
    <div><h1>Formulario de Registro de Proveedores</h1></div>
    <div>
        <form action="{{route('guardarNuevoProveedor')}}" method="POST">
            @csrf
            <label for="nombreProveedor">Nombre</label>
            <input type="text" name="nombreProveedor"> <br>

            <label for="fechaRegistro">Fecha de Registro</label>
            <input type="text" name="fechaRegistro"> <br>

            <label for="telefonoProveedor">Telefono</label>
            <input type="text" name="telefonoProveedor"> <br>

            <label for="correo">correo</label>
            <input type="text" name="correo"> <br>
            <button type="submit">Guardar</button>
        </form>
        <div><a href=""><button>Volver</button></a></div>
    </div>
</body>
</html>