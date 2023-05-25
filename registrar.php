<?php
               //requerimos el archivo conexion
               require_once 'clases/conexion.php';
               //instanciamos la clase conexion
               $_conexion = new conexion;
               //creamos la consulta SELECT
               $query= "SELECT * FROM areas";
               //enviamos la consulta para ser ejecutada
               $datosRecibidos = $_conexion->obtenerDatos($query);
               //var_dump($datosRecibidos);exit;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<h2>REGISTRO EMPLEADO</h2>
  <form action="registrar.php" method="post" enctype="multipart/form-data">
  <div class="form-group col-md-6"">
    <label for="exampleInputEmail1">Nombre Completo: *</label>
    <input type="text" class="form-control" id="nombreCompleto" placeholder="nombre completo" name='nombreCompleto'>
  </div>
  <div class="form-group col-md-6"">
    <label for="exampleInputPassword1">Correo electronico: *</label>
    <input type="email" class="form-control" id="mailEmpleado" placeholder="correo" name='mailEmpleado'>
  </div>

        <div class="form-check">
        <label class="form-check-label" for="femenino">
            Sexo : *
          </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input class="form-check-input" type="radio" name="sexo" id="masculino" value="Masculino">
          <label class="form-check-label" for="masculino">
            Masculino
          </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input class="form-check-input" type="radio" name="sexo" id="femenino" value="Femenino">
          <label class="form-check-label" for="femenino">
            Femenino
          </label>
        </div><br>
        <div class="input-group col-md-6">
        <label class="form-check-label" for="area">
            Area *:
          </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <select class="custom-select" id="area">
            <?php foreach ( $datosRecibidos as $value) {
                echo "<option value=".$value['nombre'].">".$value['nombre']."</option>";
            } ?>
            </select>
        </div><br>
        <div class="input-group col-md-6">
        <label for="descripcionEmpleado">Descripcion: *</label>
        <textarea id="descripcionEmpleado" name="descripcionEmpleado" rows="4" cols="50">      
        </textarea>
        </div><br>
        <div class="form-check">
          <label class="form-check-label" for="Editor">
            Deseo recibir boletin informativo
          </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input class="form-check-input" type="checkbox" name="boletinInformativo" id="boletinInformativo" value="Editor">
        </div><br>
        <div class="form-check">
            <h4>Roles :*</h4>
          <input class="form-check-input" type="checkbox" name="roles[]" id="Administrador" value="Administrador">
          <label class="form-check-label" for="Administrador">
            Profesional de Proyectos - Desarrollador
          </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
          <input class="form-check-input" type="checkbox" name="roles[]" id="Moderador" value="Moderador">
          <label class="form-check-label" for="Moderador">
            Gerente Estrategico
          </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
          <input class="form-check-input" type="checkbox" name="roles[]" id="Editor" value="Editor">
          <label class="form-check-label" for="Editor">
            Auxiliar Administrativo
          </label>
        </div>
        <br>
  <button type="submit" class="btn btn-primary">Registrar</button>
</form>
</body>
</html>