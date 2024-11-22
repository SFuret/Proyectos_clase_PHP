<?php 

$datosConos=[
    "cono1"=>["radio"=>3,"altura"=>15],
    "cono2"=>["radio"=>8,"altura"=>21],
    "cono3"=>["radio"=>9.5,"altura"=>6],
];

const PI=3.1416;


//Calcular generatriz

function calcularGeneratriz($r, $h)
{
    return sqrt((pow($r,2)+pow($h,2)));
}

//calcular las generatrices sub
$l1= calcularGeneratriz($datosConos['cono1']['radio'],$datosConos['cono1']['altura']);
$l2= calcularGeneratriz($datosConos['cono2']['radio'],$datosConos['cono2']['altura']);
$l3= calcularGeneratriz($datosConos['cono3']['radio'],$datosConos['cono3']['altura']);


//calcula el área de un cono
function calcularAreaCono($radio,$l)
{
return PI*$radio*($radio+$l);
}


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular áreas conos</title>
</head>
<body>
    <p>Área del cono 1(radio: <?php echo $datosConos['cono1']['radio'] ?> mm, altura: <?php echo $datosConos['cono1']['altura'] ?> mm): <?php echo round(calcularAreaCono($datosConos['cono1']['radio'],$l1),2)?>mm<sup>2</sup></p>
    <p>Área del cono 2(radio: <?php echo $datosConos['cono2']['radio'] ?> mm, altura: <?php echo $datosConos['cono2']['altura'] ?> mm): <?php echo round(calcularAreaCono($datosConos['cono2']['radio'],$l2),2)?>mm<sup>2</sup></p>
    <p>Área del cono 3(radio: <?php echo $datosConos['cono3']['radio'] ?> mm, altura: <?php echo $datosConos['cono3']['altura'] ?> mm): <?php echo round(calcularAreaCono($datosConos['cono3']['radio'],$l3),2) ?>mm<sup>2</sup></p>
</body>
</html>