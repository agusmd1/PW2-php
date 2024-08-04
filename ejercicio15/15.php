<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 15</title>
    <style>
        .ej15 {
            text-align: center;
        }
    </style>
</head>
<body>
<header>
    <?php include '../header.php'; ?>
</header>
<div class="ej15">
    <h2>Contar palabra dentro de un texto</h2>
    <form action="" method="post">
        <textarea name="texto" id="texto" cols="40" rows="10" placeholder="INGRESE TEXTO"></textarea><br>
        <input type="text" name="palabra" id="" placeholder="palabra que desea contar">
        <button type="submit">buscar</button>
    </form>
</div>
<?php
function contarPalabra($palabra, $texto)
{

    $palabra = strtolower($palabra); //minuscula todo
    $texto = strtolower($texto);


    $ocurrencias = substr_count($texto, $palabra); //cuenta

    return $ocurrencias;
}

$texto = $_POST['texto'] ?? '';
$palabra = $_POST['palabra'] ?? '';


if (!empty($texto) && !empty($palabra)) { //si el texto y la palabra no estan vacios
    $resultado = contarPalabra($palabra, $texto);
    echo "La palabra '$palabra' aparece $resultado veces en el texto ingresado.";
} else {
    echo "Por favor, ingrese tanto el texto como la palabra que desea contar.";
}
?>

</body>
</html>
