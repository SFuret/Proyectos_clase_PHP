<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador</title>
</head>

<body>
    <?php
    echo "<h2>Números de 1 a 100</h2>";
    for ($i = 1; $i <= 100; $i++) {
        if ($i !== 100) {
            echo "$i, ";
        } else {
            echo "$i";
        }
    }

    echo "<h2>Números del 10 al 0</h2>";
    $contador = 10;
    while ($contador > 0) {

        echo "$contador- ";
        $contador -= 1;
    }
    echo "$contador";


    ?>
</body>

</html>