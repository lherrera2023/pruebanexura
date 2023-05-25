<?php

class Empleado
{
   public $nombrecompleto, $correo, $sexo, $area, $descripcion, $boletin, $roles=[];

   function creaEmpleado($nom,$cor,$sexo,$area,$descripcion,$boletin,$roles)
   {
      $this->nombrecompleto = $nom;
      $this->correo = $cor;
      $this->sexo = $sexo;
      $this->area = $area;
      $this->descripcion = $descripcion;
      $this->boletin = $boletin;
      $this->roles = $roles;
   }

}