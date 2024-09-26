<?php 
$radio= 4.5;
define('PI', 3.1416);  //declaración de una constante
$area= PI*pow($radio,2);

//uso funcion number_format($area,2,".","")
$textoResultado="El área calculada del círculo es ".number_format($area,2,".","");  //concateno con .
echo "$textoResultado <br>" ;


//convertir a mayúsculas función strtoupper
$textoResultadoMayus=strtoupper($textoResultado);
echo "$textoResultadoMayus <br>";

//reemplazar una cadena por otra en un texto usando str_replace($valorViejo, $valorNuevo, $cadenaEnQueSeAplicaCambio);
$textoResultadoModificado=str_replace("calculada", "obtenida", $textoResultado);
echo "$textoResultadoModificado <br>";

//comprobar longitud de una cadena strlen
echo "La cadena anterior tiene ".strlen($textoResultadoModificado)." caracteres <br>";

//Encuentra la posición de la primera ocurrencia de un substring en un string uso strpos(cadenaGrande,subcadenaABuscar)
$posicion=strpos($textoResultadoModificado,"círculo");
echo "La cadena círculo aparece en el texto en la posición $posicion <br>";

//crear un array a partir de una cadena donde cada caracter ocupe una pos del array y se elimina el caracter de comparacion uso funcion explode
$numeros= "1,2,3,4,5";
$numeros=explode(",",$numeros);
$numeros=implode("+",$numeros);  //Forma una cadena a partir de un array separados por el elemento indicado en este caso +
echo "$numeros <br>";

//Las cadenas son tratadas como array en PHP. Si es una cadena numérica se puede recorrer con un foreach
$cadenaNumeros=explode("+",$numeros);
$suma=0;
foreach($cadenaNumeros as $n)
{
$suma+=$n;
}
echo "$numeros=$suma <br>";
?>