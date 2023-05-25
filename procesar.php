<?php 

require_once 'clases/Empleado.php';
require_once 'clases/conexion.php';

$empleado = new Empleado;
$conexion = new conexion;

$nom = $_REQUEST['nombreCompleto'];
$email = $_REQUEST['mailEmpleado'];
$sexo = $_REQUEST['sexo'];
$area = $_REQUEST['areaEmpleado'];
$descrip = $_REQUEST['descripcionEmpleado'];
if(isset($_REQUEST['boletinInformativo'])){
    $boletin = 1;
}
else{
    $boletin = 0;
}
$roles = $_REQUEST['roles'];
$rol = array();

    if(isset($roles[0])){
        array_push($rol,1);
    }
    if(isset($roles[1])){
        array_push($rol,7);
    }
    if(isset($roles[2])){
        array_push($rol,8);
    }


$empleado->creaEmpleado($nom,$email,$sexo,$area,$descrip,$boletin,$rol);
$conexion->registrarEmpleado($empleado);

?>