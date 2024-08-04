<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 5</title>
</head>
<body>
<header>
    <?php include '../header.php'; ?>
</header>
<main>

    <?php
    //sumatoria

    // a)con estructura for
    function sumatoria_a($array)
    {
        $suma = 0;
        for ($i = 0; $i < count($array); $i++) {
            $suma += $array[$i]; // se van sumando los valores del array a medida que van pasando los indices
        }
        return $suma;
    }

    //pruebo, deberia sumar los numeros de los indices
    $pruebaArray1 = [9, 6];
    $resultadoSumatoria = sumatoria_a($pruebaArray1);

    echo "Resultado utilizando funcion a) valores asignados '\$pruebaArray1 = [9, 6]': $resultadoSumatoria<br>";

    // b) con estructura for each
    function sumatoria_b($array)
    {
        $suma = 0;
        foreach ($array as $valor) {   //array con foreach explicacion profe facu 9/04, el dato de $array los itera en $valor
            $suma += $valor;
        }
        return $suma;
    }

    $pruebaArray2 = [2, 2];
    $resultadoSumatoria = sumatoria_b($pruebaArray2);

    echo "Resultado utilizando funcion b) valores asignados '\$pruebaArray2 = [2, 2]': $resultadoSumatoria<br>";


    // c) con while x.x
    function sumatoria_c($array)
    {
        $suma = 0;
        $i = 0; //arranca con el primer indice dle vector

        while ($i < count($array)) { //pregunta si el valor del i es menor al indice del array
            $suma += $array[$i];
            $i++; //va aumentando el indice cada vez que se cumple
        }
        return $suma;
    }

    $pruebaArray3 = [55, 55];
    $resultadoSumatoria = sumatoria_c($pruebaArray3);

    echo "Resultado utilizando funcion c) valores asignados '\$pruebaArray3 = [55, 55]': $resultadoSumatoria<br>";
    ?>

</main>
</body>
</html>

