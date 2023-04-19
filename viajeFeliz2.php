<?php
class ViajeFeliz2 {
    //ATRIBUTOS
    private $codigo;
    private $destino;
    private $cantMaxPasajeros;
    private $pasajeros;

    //METODOS
    public function __construct($codigo, $destino, $cantMaxPasajeros, $pasajeros){
        $this -> codigo= $codigo;
        $this -> destino= $destino;
        $this -> cantMaxPasajeros = $cantMaxPasajeros;
        $this -> pasajeros = $pasajeros;
    } 

    //METODO GET para obtener los valores de los atributos
    
    public function getCodigo (){
        return $this -> codigo;
    }
    public function getDestino (){
        return $this -> destino;
    }
    public function getCantMaxPasajeros (){
        return $this -> cantMaxPasajeros;
    }
    public function getPasajeros (){
        return $this -> pasajeros;
    }

//METODO SET para modificar los datos 

    public function setCodigo($codigo){
        $this -> codigo = $codigo;
    }
    public function setDestino ($destino){
        $this -> destino = $destino;
    }
    public function setCantMaxPasajeros ($cantMaxPasajeros){
        $this -> cantMaxPasajeros = $cantMaxPasajeros;
    }
    public function setPasajeros ($pasajeros){
        $this -> pasajeros = $pasajeros;
    }


   public function __toString (){
        $viaje = "codigo". $this-> getCodigo();
        $viaje= $viaje . "destino". $this->getDestino();
        $viaje = $viaje . "cantidad maxima de pasajeros ". $this-> getCantMaxPasajeros();

        for ($i=0; $i<count($this-> pasajeros);$i++){
            $nombre= $this -> pasajeros[$i]["nombre"];
            $apellido= $this -> pasajeros[$i]["apellido"];
            $nroDni = $this -> pasajeros[$i]["DNI"];
            $viaje = $viaje . "Pasajero". ($i+1). ": Nombre: " . $nombre." apellido: ". $apellido. " DNI:". $nroDni. "";
        }
        return $viaje;
    }

    function nombrePasajeroNuevo($dniPasajero, $nombreNuevo){
        $n= count($this-> pasajeros);
        $i = 0;
        $valor = false;
        while($i<$n && $valor == false){
            if($dniPasajero== $this -> pasajeros[$i]["DNI"]){
                $valor = true;
                $this -> pasajeros[$i]["nombre"]= $nombreNuevo;
            }
            $i++;
        }
    
    }

}