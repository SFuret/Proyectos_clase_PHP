<?php
function cuenta($a, $b)
{
    if($a < $b)
    {
        for($i=$a; $i<$b; $i++)
        {     
          echo "$i - ";
        }
        echo "$b"; 
    }
    else
    {
        for($i=$a; $i>$b; $i--)
        {     
          echo "$i - ";
        }
        echo "$b";  
    }

    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador</title>
</head>
<body>
<h2>Contador creciente de 10 a 20</h2> 
<div><?php cuenta(10,20);?></div>   

<h2>Contador decreciente de 20 a 10</h2>
<div><?php cuenta(20,10);?></div>  


</body>
</html>