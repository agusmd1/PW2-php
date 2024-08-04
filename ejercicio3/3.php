<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 3</title>


    <style>
        .texto{
            margin: 10px;
        }
    </style>
</head>
<body>
<header>
    <?php include '../header.php'; ?>
</header>
<main>
    <div class="texto">
        <?php
        // concatenar textos
        function concatenarTexto($texto1, $texto2)
        {
            $textoConcatenado = $texto1 . $texto2; //para concatenar strings se usa "."
            return $textoConcatenado;
        }

        $texto1 = "Hola yo ";
        $texto2 = " soy Agustin";

        $textoUnido = concatenarTexto($texto1, $texto2);

        echo $texto1 . "=texto1 y texto2= " . $texto2 . " forman unidos-----> " . $textoUnido;

        ?>

    </div>


</main>
</body>
</html>
