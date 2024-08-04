<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 13</title>
</head>
<body>
<header>
    <?php include '../header.php'; ?>
</header>
<main>

    <?php

    $menu = parse_ini_file("menu.ini"); //el el ini y lo devuelve como array
    $pedidoPlatos = $_POST['pedido'] ?? array(); //recive el array pedido, si no hay nada lo toma como array vacio


    echo "<h2>Pedido finalizado</h2>";
    echo "<ul>";
    if ($pedidoPlatos != NULL) {
        foreach ($pedidoPlatos as $pedidoIndividual) {
            echo "<li>{$menu[$pedidoIndividual]}</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>El pedido esta vacio</p>";
    }
    echo ' <p><a href="13.php">Volver a pedir</a></p>';

    ?>

</main>
</body>
</html>