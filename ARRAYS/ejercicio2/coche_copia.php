<?php 
$coches=[
    "W11"=> ["Toyota","100caballos","amarillo"],
    "A12"=>["Dacia", "120 caballos"],
    "D12"=>['Ford',"120caballos"]
];

echo "Array ordenado por valor <br>";
asort($coches); 
var_dump($coches);


echo "Array ordenado por clave <br>";
ksort($coches);
var_dump($coches);



?>