<?php 
$nota1=rand(0,10);
$nota2=6;
$nota3=8.1;

function evaluarResultado($nota)
{
if($nota<5)
{
    echo "Insuficiente";
}
elseif($nota>=5 && $nota<7)
{
    echo "Suficiente";
}
elseif($nota>=7 && $nota<9)
{
    echo "Notable";
}
else{
    echo "Sobresaliente";
}
}



if(($nota1>$nota2)&&($nota1>$nota3))
{
    echo "<p>La nota mayor es: $nota1 </p>";
    evaluarResultado($nota1);
    
}
elseif(($nota2>$nota1)&&($nota2>$nota3))
{
    echo "<p>La nota mayor es: $nota2</p>";
    evaluarResultado($nota2);

}
else{
    echo "<p>La nota mayor es: $nota3 </p>";
    evaluarResultado($nota3);
}


?>