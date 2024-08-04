<!doctype html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejerccio 10</title>
</head>

<body>
<header>
    <?php include '../header.php'; ?>
</header>

<main>
    <h1>Ver Imagen</h1>

    <?php
    if (isset($_GET['nombre'])) {
        $nombreImagen = $_GET['nombre'];
        $carpetaImg = '../img/';

        if (file_exists($carpetaImg . $nombreImagen)) {
            echo '<div style="text-align: center;">';
            echo '<img src="' . $carpetaImg . $nombreImagen . '" alt="' . $nombreImagen . '" style="width: 300px; height: 300px;">';
            echo '</div>';
        } else {
            echo '<p>Imagen no encontrada.</p>';
        }
    }
    ?>

    <p name="volverBoton" style="text-align: center;">
        <a href="../ejercicio9/9.php">Volver</a>
    </p>
</main>
</body>

</html>