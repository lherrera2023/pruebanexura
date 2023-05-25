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
<h2>REGISTRO EMPLEADO</h2>
  <form action="procesar.php" method="post" enctype="multipart/form-data">
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
            <select class="custom-select" id="area">
                <option selected>Choose...</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
        <br>
  <button type="submit" class="btn btn-primary">Registrar</button>
</form>
</body>
</html>