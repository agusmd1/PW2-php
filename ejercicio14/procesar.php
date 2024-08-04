<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 14</title>
</head>
<body>
<header>
    <?php include '../header.php'; ?>
</header>
<main>
    <?php

    $tamano = isset($_POST['tamano']) ? intval($_POST['tamano']) : 0;
    if ($tamano > 0) {
        for ($i = 0; $i < $tamano; $i++) {
            for ($j = 0; $j < $tamano; $j++) {
                $matriz[$i][$j] = rand(-99, 99); //le asigna valores random a la matriz
            }
        }
    } else {
        echo "<p>ingrese un numero mayor a cero</p>";
    }

    echo "<h2>Matriz de $tamano x $tamano:</h2>";
    echo "<table border='2'>";
    for ($i = 0; $i < $tamano; $i++) {
        echo "<tr>"; //table row(imprime filas)
        for ($j = 0; $j < $tamano; $j++) {
            echo "<td>{$matriz[$i][$j]}</td>"; //imprime cada celda
        }
    }
    echo "</table><br>";


    echo "valores de la diagonal principal: ";
    for ($i = 0; $i < $tamano; $i++) {
        echo $matriz[$i][$i] . " | ";
    }

    echo "<br>valores de la diagonal secundaria: ";
    for ($i = 0; $i < $tamano; $i++) {
        echo $matriz[$i][($tamano - 1 - $i)] . " | ";
    }

    $total = 0;
    for ($i = 0; $i < $tamano; $i++) {
        $columnas = count($matriz[$i]); // obtiene el numero de de columnas de cada fila

        for ($j = 0; $j < $columnas; $j++) { //columnas
            $total += $matriz[$i][$j];
        }
    }
    echo "<br>La suma total de los valores en la matriz es: $total";
    echo ' <p><a href="14.php">Volver</a></p>';

    ?>
</main>
</body>
</html>