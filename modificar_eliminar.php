<?php
require_once 'clases/conexion.php';
$conexion = new conexion;

if(isset($_REQUEST['btnEliminar'])){
    $id = $_REQUEST['btnEliminar'];
    $conexion->eliminarUsuario($id);
}
else{
    $id = $_REQUEST['btnModificar'];
    $datos=$conexion->consultaEmpleado($id);
    foreach ($datos as $key => $value) {
        echo "
        <!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta http-equiv='X-UA-Compatible' content='IE=edge'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css' integrity='sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm' crossorigin='anonymous'>
            <title>Actualizar</title>
        </head>
        <body>
        <h3>Actualizar Datos Empleado</h3>
        <form action='actualizar.php' method='post' name='formActualizar'>
        <div class='form-group col-md-6'>
        Nombre:
        <input type='text' class='form-control' value='".$value['nombre']."' name='actNombre'><br>
        Correo:
        <input type='text' class='form-control' value='".$value['email']."' name='actCorreo'><br>
        Descripcion:
        <input type='text' class='form-control' value='".$value['descripcion']."' name='actDescrip'><br>
        <input type='hidden' class='form-control' value='".$value['id']."' name='actId'><br>
        <button class='btn btn-primary' type='submit'>Actualizar</button>
      </div>
    </form>";
    }
}

?>