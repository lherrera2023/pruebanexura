<?php
require_once 'clases/conexion.php';
$conexion = new conexion;
$datos = $_REQUEST;
$actualiza = $conexion->actualizaEmpleado($datos);
?>