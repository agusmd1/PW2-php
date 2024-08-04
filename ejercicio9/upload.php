<?php

if (isset($_FILES['archivo'])) {          //un array asociativo de elementos subidos al script en curso a través del metodo POST
    $file_name = $_FILES['archivo']['name'];
    $file_size = $_FILES['archivo']['size'];
    $file_tmp = $_FILES['archivo']['tmp_name']; //aca va a parar
    $file_type = $_FILES['archivo']['type'];


    $rutaFoto = "../img/" . $_POST["nombre"]; //ruta donde se suban las fotos

    if (move_uploaded_file($file_tmp, $rutaFoto . $file_name)) {  // de ruta temp lo paso a la carpeta deseada
        echo "La imagen " . $file_name . " ha sido subido correctamente";
    } else {
        echo "Error al subir la imagen";
    }
} else {
    echo "seleccione un imagen";
}

header("location:../ejercicio9/9.php"); //funcion para redireccionar
exit();