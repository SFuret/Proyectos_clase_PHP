<?php 
//otra forma de declarar un array asociativo, en este caso solo tiene clave un elemento del array
$coches = array(
    array("1234 ABC" => "Toyota", "Yaris", 4),
    array("5678 DEF" => "Ford", "Focus", 4),
    array("5678 DEF" => "BMW", "Serie 3" , 5),
    array("2345 JKL" => "Honda", "Civic" , 6)
    );

    
    usort($coches, function($coche1, $coche2) { //ordenar por modelo
        return strcmp($coche1[1], $coche2[1]); // Compara los modelos y los ordena alfabéticamente
    });
    
   //Mostrar array ordenado
   print_r($coches);

?>