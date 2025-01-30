
<?php
foreach($matriculas as $matricula){
   // var_dump($matriculas);
    ?>
    
    <li><?php echo $matricula["nia"]?> </li>
    <li><?php echo $matricula["codigo"]?> </li>
    <li><?php echo $matricula["año"]?> </li>
    <?php
}

?>    
