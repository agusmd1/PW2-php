<!doctype html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 12</title>

    <style>
        .listado {
            text-align: center;
        }

        .listado ul {
            list-style: none;
        }

    </style>
</head>
</head>

<body>
<header>
    <?php include '../header.php'; ?>
</header>

<main>
    <div class="listado">
        <?php
        /*
         * Una vez enviado el formulario, muestra una segunda página que liste todos los visitantes que
        cruzaron este control interplanetario, y un contador del total de visitas, que no pertenecen al
        planeta Tierra.

         */

        $visitantesJson = file_get_contents('visitantes.json'); //mete el contenido de un json a la variable
        $visitantesString = json_decode($visitantesJson, true); //Convierte un string codificado en JSON a una variable de PHP

        if (file_exists($visitantesJson)) {
            $visitantesString;
        }

        $visitasTotales = 0;
        foreach ($visitantesString as $visitaIndividual) { //contamos cada visita individual que sea distinta a 'tierra'
            if ($visitaIndividual['planeta'] !== 'tierra') {
                $visitasTotales++;
            }
        }

        echo "<h2>Lista de visitantes</h2>";
        echo "<ul>";
        foreach ($visitantesString as $visitaIndividual) {
            echo "<li>Nombre: {$visitaIndividual['nombre']} - Planeta: {$visitaIndividual['planeta']}</li>";
        }
        echo "</ul>";
        echo "<p>Total de visitas de planetas no terrestres: $visitasTotales</p>";
        ?>
    </div>
    <p><a href="12.php">Volver</a></p>
</main>
</body>

</html>