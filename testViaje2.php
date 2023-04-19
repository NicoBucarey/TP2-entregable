<?php
include "viajeFeliz2.php";
include "Pasajero.php";
include "ResponsableV.php";


    $objectPasajero1 = new Pasajero ("Jose","Garcia",333123, 1548928);
    $objectPasajero2 = new Pasajero ("Jazmin","Valenzuela",43530680,154584611);
    $objectPasajero3 = new Pasajero ("Nico", "Bucarey",41911258,154573646);
    $objectPasajero4 = new Pasajero ("Lionel", "Messi", 32897323,15419481);

    $coleccionObjPasajeros =[];
    $coleccionObjPasajeros[0]= $objectPasajero1;
    $coleccionObjPasajeros[1]= $objectPasajero2;
    $coleccionObjPasajeros[2]= $objectPasajero3;
    $coleccionObjPasajeros[3]= $objectPasajero4;

//número de empleado, número de licencia, nombre y apellido.
echo "numero de empleado";
$numEmpleado = trim(fgets(STDIN));
echo "numero de licencia";
$numLicencia = trim(fgets(STDIN));
echo "nombre";
$nombre = trim(fgets(STDIN));
echo "apellido";
$apellido = trim(fgets(STDIN));
$objectResponsable = new ResponsableV($numEmpleado,$numLicencia,$nombre,$apellido);


/**
 * Menu de pasajeros
 */
function menuPasajeros(){
//int $opcionMenu

do {
    echo "------MENU DE OPCIONES------
1- Ingresar datos del viaje: 
2- Modificar datos del viaje: 
3- Modificar los datos de los pasajeros
4- Ver los datos:
5- Salir\n";
$opcionMenu = trim(fgets(STDIN));
if ($opcionMenu<0 || $opcionMenu >5){
    echo "La opcion ingresada es invalida, ingrese una opcion entre el 1 y el 5: ";
    $opcionMenu = trim(fgets(STDIN));
}
}while ($opcionMenu<0 || $opcionMenu >5 );

return $opcionMenu;
}


do {
    $opcionMenu= menuPasajeros();
    switch ($opcionMenu) {
     case 1:
        echo "Ingrese el codigo del viaje: ";
        $codigoViaje= trim(fgets(STDIN));
         echo "Ingrese el destino: ";
        $destino = trim(fgets(STDIN));
         echo "Ingrese la cantidad maxima de pasajeros: ";
        $cantMaxPasajeros = trim(fgets(STDIN));
        
        for($i=0; $i< $cantMaxPasajeros; $i++){
            echo "Ingrese el nombre del pasajero: ". ($i + 1);
            $nombre = trim(fgets(STDIN));
            echo "Ingrese el apellido del pasajero: ". ($i+1);
            $apellido = trim(fgets(STDIN));
            echo "Ingrese el DNI del pasajero: ". ($i+1);
            $dni = trim(fgets(STDIN));
            $pasajeros [$i]= ["nombre"=>$nombre,"apellido"=>$apellido,"DNI"=>$dni];
        }
            $objectViaje = new ViajeFeliz2($codigoViaje, $destino, $cantMaxPasajeros, $pasajeros);        
        

    break;
    
    
    case 2:
        
        echo "¿Desea modificar el codigo? SI/NO: ";
            $rta = trim(fgets(STDIN));
            if ($rta== "SI"){
                echo "Ingrese el nuevo codigo: ";
                $codigoMod = trim(fgets(STDIN));
                $objectViaje -> setCodigo ($codigoMod);
                echo $objectViaje -> getCodigo();
             }
        echo "\nDesea modificar el destino? SI/NO: ";
            $rta = trim(fgets(STDIN));
            if ($rta== "SI"){
                echo "Ingrese el nuevo destino";
                $destinoMod = trim(fgets(STDIN));
                $objectViaje -> setDestino ($destinoMod);
                echo $objectViaje -> getDestino();
            }
        echo "Desea modificar la cantidad maxima de pasajeros? SI/NO: ";
            $rta = trim(fgets(STDIN)); 
            if($rta== "SI"){
                echo "modifique la cantidad maxima de pasajeros";
                $cantMaxPasajerosMod = trim(fgets(STDIN));
                $objectViaje -> setCantMaxPasajeros ($cantMaxPasajerosMod);
                echo $objectViaje -> getCantMaxPasajeros();
            }
        echo $objectViaje;
    break;
    
    
    case 3:

         echo "desea modificar los datos de algun pasajero? SI/NO";
            $rta = trim(fgets(STDIN));
            if ($rta == "SI"){
                echo "desea modificar el nombre de algun pasajero? si/no";
                $rta = trim(fgets(STDIN));
                if ($rta == "si"){
                     echo "ingrese el DNI del pasajero que desea modificar: ";
                    $dniPasajero = trim(fgets(STDIN));
                    echo "ingrese el nombre nuevo";
                    $nombreNuevo = trim(fgets(STDIN));
                    $objectViaje -> nombrePasajeroNuevo($dniPasajero,$nombreNuevo);
                    echo $objectViaje;
                }
            }
               
            

        break;
        
   
    case 4: 
       
        echo $objectViaje;

        
        break;

    }
}while($opcionMenu != 5);



 //PROGRAMA PRINCIPAL 

