<?php
class conexion {
    //creamos los atributos de la clase
    private $server = 'localhost';
    private $user = 'root';
    private $password = '';
    private $database = 'prueba_tecnica_dev';
    private $port = '3306';
    public $conexion;

    //declaramos el contructor 
    function __construct(){
        $this->conexion = new mysqli($this->server,$this->user,$this->password,$this->database,$this->port);
    }
    private function convertirUTF8($array){
        array_walk_recursive($array,function(&$item,$key){
            if(!mb_detect_encoding($item,'utf-8',true)){
                $item = utf8_encode($item);
            }
        });
        return $array;
    }
    public function obtenerDatos($sqlstr){
        $results = $this->conexion->query($sqlstr);
        $resultArray = array();
        foreach ($results as $key) {
            $resultArray[] = $key;
        }
        return $this->convertirUTF8($resultArray);
    }
    public function obtenerDatosNomArea($sqlstr){
        $query = "select nombre from areas where id =".$sqlstr;
        $results = $this->conexion->query($query);
        $resultArray = array();
        foreach ($results as $key) {
            $resultArray[] = $key;
        }
        return $this->convertirUTF8($resultArray);
    }
    public function registrarEmpleado($datos){
        
        $query1 = "insert into empleado (id,nombre,email,sexo,area_id,boletin,descripcion)
        values (NULL,'".$datos->nombrecompleto."','".$datos->correo."','".$datos->sexo."',".$datos->area.",".$datos->boletin.",'".$datos->descripcion."')";

        $result = $this->conexion->query($query1) or die($this->conexion->error);
            if($result){
                $id= $this->consultaId($datos->nombrecompleto);
                $this->insertarRol($id[0]['id'],$datos->roles);
                echo "<script>alert('Datos registrados correctamente'); location.href ='index.php';</script>";
            }
            else{
                echo "<script>alert('No se registraron los datos, por favor validar')</script>";
            }
    }
    public function consultaId($nombre){
        $query = "select id from empleado where nombre = '".$nombre."'";
        $results = $this->conexion->query($query);
        $resultArray = array();
        foreach ($results as $key) {
            $resultArray[] = $key;
        }
        return $this->convertirUTF8($resultArray);
    }

    public function insertarRol($id,$rol){
        foreach ($rol as $value) {
            $query = "insert into empleado_rol (empleado_id,rol_id) values (".$id.",".$value.")";
            $results = $this->conexion->query($query);
        }

    }
    public function eliminarUsuario($id){
            $query = "delete from empleado_rol where empleado_id = ".$id;
            $results = $this->conexion->query($query);
            $query2 = "delete from empleado where id = ".$id;
            $results2 = $this->conexion->query($query2);
            if($results && $results2 ){

                echo "<script>alert('Datos eliminados correctamente'); location.href ='index.php';</script>";
            }
            else{
                echo "<script>alert('No se eliminaron los datos, por favor validar')</script>";
            }
    }
    public function consultaEmpleado($id){
        $query = "select * from empleado where id = ".$id;
        $results = $this->conexion->query($query);
        $resultArray = array();
        foreach ($results as $key) {
            $resultArray[] = $key;
        }
        return $this->convertirUTF8($resultArray);
    }

    public function actualizaEmpleado($datos){
        
        $query = "update empleado set nombre ='".$datos['actNombre']."',
                  email = '".$datos['actCorreo']."',
                  descripcion = '".$datos['actDescrip']."'  
                  where id = ".$datos['actId'];

        $results = $this->conexion->query($query);
        if($results){

            echo "<script>alert('Datos actualizados correctamente'); location.href ='index.php';</script>";
        }
        else{
            echo "<script>alert('No se actualizaron los datos, por favor validar')</script>";
        }
    }

}
?> 