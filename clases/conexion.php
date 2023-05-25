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
                echo "<script>alert('Datos registrados correctamente'); location.href ='index.php';</script>";
            }
            else{
                echo "<script>alert('No se registraron los datos, por favor validar')</script>";
            }
   
    }

}
?> 