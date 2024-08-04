<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 1</title>
</head>
<body>
<header>
    <?php include '../header.php'; ?>
</header>
<main>
    <?php

    //semaforo
    // a) primer metodo con if else
    function semaforo_a($color)
    {
        if ($color === "rojo") {
            return "frenar";
        } elseif ($color === "amarillo") {
            return "precaución";
        } elseif ($color === "verde") {
            return "avanzar";
        } else {
            return "estado desconocido";
        }
    }

    //b) segundo metodo con if inline

    function semaforo_b($color)
    {
        return ($color == "rojo") ? "frene" : (($color == "amarillo") ? "precaución" : (($color == "verde") ? "avance" : "estado desconocido"));
    }

    // c) metodo con swtich
    function semaforo_c($colorMinuscula)
    {
        $colorMinuscula = strtolower($colorMinuscula); //no importa como se pase el color por parametro se transforma a minuscula
        switch ($colorMinuscula) {
            case "rojo":
                $textoDelSemaforo = "frene";
                break;
            case "amarillo":
                $textoDelSemaforo = "precaución";
                break;
            case "verde":
                $textoDelSemaforo = "avance";
                break;
            default:
                return "estado desconocido u opcion incorrecta";
        }

        return $textoDelSemaforo;
    }

    $colora = "verde";
    $colorb = "amarillo";
    $colorc = "rojo";

    $resultadoa = semaforo_a($colora);
    $resultadob = semaforo_b($colorb);
    $resultadoc = semaforo_c($colorc);


    echo 'Resultado de la funcion a) utilizando color "verde", puede: ' . $resultadoa . '<br>';
    echo 'Resultado de la funcion b) utilizando color "amarillo", puede: ' . $resultadob . '<br>';
    echo 'Resultado de la funcion c) utilizando color "rojo", puede: ' . $resultadoc . '<br>';

    ?>

</main>
</body>
</html>

