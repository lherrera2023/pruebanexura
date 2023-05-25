<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PruebaNexura</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<h2>VALIDACION DE DATOS</h2>
  <form action="procesar.php" method="post" enctype="multipart/form-data">
  <div class="form-group col-md-6"">
    <label for="exampleInputEmail1">Usuario:</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="usuario" name='usuarioLog'>
  </div>
  <div class="form-group col-md-6"">
    <label for="exampleInputPassword1">Contrase&ntilde;a:</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="password" name='passUser'>
  </div>
  <div class="form-group col-md-6"">
    <label for="edadUser">Edad:</label>
    <input type="number" class="form-control" id="edadUser" placeholder="edad" name='edadUser'>
  </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="sexo" id="masculino" value="Masculino">
          <label class="form-check-label" for="masculino">
            Masculino
          </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input class="form-check-input" type="radio" name="sexo" id="femenino" value="Femenino">
          <label class="form-check-label" for="femenino">
            Femenino
          </label>
        </div><br>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="roles[]" id="Administrador" value="Administrador">
          <label class="form-check-label" for="Administrador">
            Administrador
          </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input class="form-check-input" type="checkbox" name="roles[]" id="Moderador" value="Moderador">
          <label class="form-check-label" for="Moderador">
            Moderador
          </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input class="form-check-input" type="checkbox" name="roles[]" id="Editor" value="Editor">
          <label class="form-check-label" for="Editor">
            Editor
          </label>
        </div>
        <br>
          <input type="file" name="imagenUp" id="imagenUp">
        <br>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
</body>
</html>