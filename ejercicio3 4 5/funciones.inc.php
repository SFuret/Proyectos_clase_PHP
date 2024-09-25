<?php 

function calculaDescuento($precio, $descuento=0) /* Le pongo valor 0 por defecto*/
{
if(is_numeric($descuento) && $descuento!==0) /*Comprueba que no es un número o cadena numérica*/    
{
 
    $precio-=($precio * $descuento)/100;

}
return $precio;
}


function intercambia($a,$b)
{
echo "Valores iniciales a $a y b $b <br>";
$c=$a;
$a=$b;
$b=$c;
echo "<br> <h3>Intercambiar valores</h3>";
echo "Ahora a es $a y b es $b ";

}

?>