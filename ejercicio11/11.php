<!doctype html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 11</title>
</head>
</head>

<body>
<header>
    <?php include '../header.php'; ?>
</header>

<main>
    <h1>Lanzar Dados</h1>

    <form action="tirar.php" method="post">
        <label for="cantidadDados">Cantidad de Dados:</label>
        <select name="cantidadDados" id="cantidadDados">
            <option value="1">1 Dado</option>
            <option value="2">2 Dados</option>
            <option value="3">3 Dados</option>


        </select>
        <input type="submit" value="Lanzar Dados">
    </form>

</main>
</body>

</html>