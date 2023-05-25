<?php
               //requerimos el archivo conexion
               require_once 'clases/conexion.php';
               //instanciamos la clase conexion
               $_conexion = new conexion;
               //creamos la consulta SELECT
               $query= "SELECT * FROM empleado as A 
                        inner join empleado_rol as B on A. ";
               //enviamos la consulta para ser ejecutada
               $datosRecibidos = $_conexion->obtenerDatos($query);
               //var_dump($datosRecibidos);exit;
?>