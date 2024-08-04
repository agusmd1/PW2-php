<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 4</title>
</head>
<body>
<header>
    <?php include '../header.php'; ?>
</header>
<main>

    <?php
    //incrementar
    function incrementar(&$numero)      // explicacion profe Facundo 15/04 & hace que el dato primitivo se pase por referencia
    {
        $numero++;
    }

    $numeroAIncrementar = 7;
    incrementar($numeroAIncrementar);
    echo " '\$numeroAIncrementar = 7' ---- incrementado es: " . $numeroAIncrementar . "<br>";

    ?>

</main>
</body>
</html>
