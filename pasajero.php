<?php

Class Pasajero {
private $nombre;
private $apellido;
private $dni; 
private $telefono;

public function  __construct ($nombre,$apellido,$dni,$telefono){
    $this -> nombre = $nombre;
    $this -> apellido = $apellido;
    $this -> dni = $dni;
    $this -> telefono = $telefono;
}
//Metodos get
public function getNombre(){
   return $this -> nombre;
}

public function getApellido(){
    return $this -> apellido;
}
public function getDni(){
    return $this -> dni;
}
public function getTelefono(){
    return $this -> telefono;
}
//Metodos set 
public function setNombre ($nombreMod){
    $this-> nombre = $nombreMod;
}
public function setApellido($apellidoMod){
    $this -> apellido = $apellidoMod;
}
public function setDni ($dniMod){
    $this -> dni = $dniMod;
}
public function setTelefono ($telefonoMod){
    $this -> telefono = $telefonoMod;
}












}