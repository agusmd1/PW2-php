<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 2</title>
</head>
<body>
<header>
    <?php include '../header.php'; ?>
</header>
<main>

    <?php
    //binomio cuadrado perfecto
    function binomioCuadradoPerfecto_a($a, $b)
    {
        $suma = $a + $b;
        $resultadoA = pow($suma, 2);
        return $resultadoA;
    }


    function binomioCuadradoPerfecto_b($a, $b)
    {
        $resultadoB = ($a ** 2 + 2 * $a * $b + $b ** 2);
        return $resultadoB;
    }


    $a = 5;
    $b = 6;

    $resultado_a = binomioCuadradoPerfecto_a($a, $b);
    $resultado_b = binomioCuadradoPerfecto_b($a, $b);

    echo "Valores asignados por parametro 'a = 5' y parametro 'b=6' <br>";

    echo "Resultado utilizando función a: $resultado_a<br>";
    echo "Resultado utilizando función b: $resultado_b<br>";

    ?>

</main>
</body>
</html>




