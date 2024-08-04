<?php


$visitantesJson = file_get_contents('visitantes.json'); //mete el contenido de un json a la variable

$visitantesString = json_decode($visitantesJson, true); //convierte un string codificado en json a una variable de PHP


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $planeta = $_POST['planeta'];

    $visitantes = [];
    if (file_exists("visitantes.json")) {
        $visitantes = $visitantesString; //el contenido del json pasa al array visitantes
    }

    $visitantes[] = ["nombre" => $nombre, "planeta" => $planeta];

    file_put_contents("visitantes.json", json_encode($visitantes)); //escribe en el archivo json, y el enconde lo escribe en el tipo de lenguaje de json(inverso al decode)
}
header("location:../ejercicio12/listado.php"); //funcion para redireccionar
exit();