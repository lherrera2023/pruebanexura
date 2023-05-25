<?php
               //requerimos el archivo conexion
               require_once 'clases/conexion.php';
               //instanciamos la clase conexion
               $_conexion = new conexion;
               //creamos la consulta SELECT
               $query= "SELECT * FROM empleado";
               
               //enviamos la consulta para ser ejecutada
               $datosEmpleados = $_conexion->obtenerDatos($query);
               
               //var_dump($datosRecibidos);exit;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Lista Empleados</title>
</head>
<body>
<div class="container">
    <br>
  <h2>Listado Empleados</h2>  
  <form action="registrar.php" method="post">
    <button type="submit" class="btn btn-primary" name='btnagregar'>+ Agregar Empleado</button>   
  </form>
    
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Email</th>
        <th>Sexo</th>
        <th>Boletin</th>
        <th>Area</th>
        <th>Modificar</th>
        <th>Eliminar</th>
      </tr>
    </thead>
    <tbody>
        <form action="modificar_eliminar.php" method="post">
        <?php 
            foreach ( $datosEmpleados as $key => $value) {
                if($value['sexo'] =='M'){ 
                    $sexo = "Masculino";
                }
                else{
                    $sexo = "Femenino";
                }
                if($value['boletin'] == 1){ 
                    $boletin = "Si";
                }
                else{
                    $boletin = "No";
                }
                $area = $_conexion->obtenerDatosNomArea($value['area_id']);
                echo "<tr>
                        <td>".$value['nombre']."</td>
                        <td>".$value['email']."</td>
                        <td>".$sexo."</td>
                        <td>".$boletin."</td>
                        <td>".$area[0]['nombre']."</td>
                        <td style='text-align:center;'><button class='btn btn-success' name='btnModificar' value='".$value['id']."'>Modificar</button></td>
                        <td style='text-align:center;'><button class='btn btn-danger' name='btnEliminar' value='".$value['id']."'>Eliminar</button></td>
                </tr>";
            }
        ?>
        </form>
    </tbody>
  </table>
</div>
</body>
</html>