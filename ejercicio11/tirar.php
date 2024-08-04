<!doctype html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 11</title>
    <style>
    </style>
</head>

<body>
<header>
    <?php include '../header.php'; ?>
</header>

<main>
    <h1>resultado</h1>

    <?php
    if (isset($_POST['cantidadDados'])) {
        $cantidad = $_POST['cantidadDados']; //cantidad en variable
        $total = 0;


        echo '<p>se han lanzado ' . $cantidad . ' dados</p>';
        for ($i = 0; $i < $cantidad; $i++) {
            $valorDado = rand(1, 6);
            $total += $valorDado;
            echo '<img src="dado' . $valorDado . '.png" alt="Dado ' . $i . '" style="width: 100px; height: 100px;">';
        }
        echo '<p>Puntaje total: ' . $total . '</p>';
    } else {
        echo '<p>algo malio sal, intente un nuevo lanzamiento</p>';
    }
    ?>

    <p><a href="11.php">Volver</a></p>

</body>

</html>