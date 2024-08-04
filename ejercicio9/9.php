<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejerccio 9</title>
</head>
<body>
<header>
    <?php include '../header.php'; ?>
</header>
<!-- ejercicio 9-->
<h2>Imagenes existentes:</h2>
<div class="imagen-container">
    <?php
    $carpetaImg = '../img/';
    $imagenes = scandir($carpetaImg);  //scandir escanea lo que hay en el directorio y lo devuelve como array

    foreach ($imagenes as $imagen) { //los archivos dentro del array pasan a ser $imagen
        if ($imagen != '.' && $imagen != '..') { //archivos que devuelve el scandir este if es para que no los imprima
            echo '<div class="imagen" style="text-align: center;">';
            echo '<img src="' . $carpetaImg . $imagen . '" alt="' . $imagen . '" style="width: 300px; height: 300px;">';
            echo '<p>' . $imagen . '</p>';
            echo '</div>';
        }
    }
    ?>
</div>

<h2>Subir Imagen</h2>
<form action="upload.php" method="post" enctype="multipart/form-data">
    <!-- el metodo post, le manda al upload.php para que lo procese -->
    <input type="file" name="archivo" id="archivo">

    Nombre : <input type="text" name="nombre">

    <input type="submit" value="Subir Archivo" name="sumbit">
</form>

<!-- 10-->
<h2>Ver Imágenes</h2>
<ul>
    <?php
    /*
     * El ejercicio 10 lo encararía reutilizando el archivo php de procesar la carga , el que llamamos upload en clase, y haría otro archivo php para listar las imagenes.
Efectivamente, hay que hacer un for-each, donde el echo haga un href diferente para cada imagen.
Un truquito podria ser que la url contenga el nombre de arvhivo a abrir ;)
ej: mostrarImagen.php?nombre=<nombre-imagen>
     */
    foreach ($imagenes as $imagen) {
        if ($imagen != '.' && $imagen != '..') {
            echo '<li><a href="../ejercicio9/10.php?nombre=' . urlencode($imagen) . '">' . $imagen . '</a></li>'; //toma el nombre de la imagen y lo transforma en url
        }
    }
    ?>
</ul>
</body>
</html>