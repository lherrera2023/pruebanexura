<?php

class Empleado
{
   public $nombrecompleto, $correo, $sexo, $area, $descripcion, $roles;

   function creaEmpleado($nom,$cor,$sexo,$area,$descripcion,$roles)
   {
      $this->nombrecompleto = $nom;
      $this->correo = $cor;
      $this->sexo = $sexo;
      $this->area = $area;
      $this->descripcion = $descripcion;
      $this->roles = $roles;
   }

}