<?php

//array asociativo
$coches=[
"M01"=>["Modelo"=>"Yaris", "Marca"=>"Toyota", "Puertas"=>5],
"M02"=>["Modelo"=>"A05", "Marca"=>"Audi", "Puertas"=>3],
"M03"=>["Modelo"=>"Escarabajo", "Marca"=>"Mercedes-Benz", "Puertas"=>2]
];

var_dump($coches);
echo "<br><br>";
var_dump($coches["M01"]) ;

echo "<br><br>";
echo $coches["M01"]["Modelo"];

/*****************************************/
//ordenar ascendente por valor
asort($coches);

echo "<br><br>";
var_dump($coches);

echo "<br><br>";
//recorrer array
foreach($coches as $coche)
{

    echo "Modelo:" .$coche["Modelo"]. " ";    
    echo "Marca: ".$coche["Marca"]. " " ;
    echo "Puertas: ".$coche["Puertas"]."<br><br>";
}

echo "Cantidad de elementos del array: ".count($coches);

echo "<br><br>";

/*****************************************/
//ordenar por número de puertas de menor a mayor ($coche1["Puertas"] - $coche2["Puertas"])
usort($coches, function($coche1,$coche2){
return $coche1["Puertas"] - $coche2["Puertas"];
});

//mostrar
for ($i=0; $i < count($coches); $i++) { 
    echo "Marca: ".$coches[$i]["Marca"];
    echo "Puertas: ".$coches[$i]["Puertas"];
    echo "<br>";
}

/*****************************************/
echo "<br><br>";
//ordenar de mayor a menor por numero de puertas (lo hago invirtiendo el orden de la comparacion $coche2["Puertas"] - $coche1["Puertas"]) 
usort($coches, function($coche1, $coche2){
return $coche2["Puertas"] - $coche1["Puertas"];
});

foreach($coches as $coche)
{
    echo "Marca: ".$coche["Marca"];
    echo "Puertas: ".$coche["Puertas"];
    echo "<br>";
};
?>