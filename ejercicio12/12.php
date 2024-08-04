<!doctype html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 12</title>

    <style>

    </style>
</head>


<body>
<header>
    <?php include '../header.php'; ?>
</header>

<main>
    <div class="registro" style="text-align: center; margin-top: 100px">
        <form action="registrar.php" method="post">
            <label for="nombre">Ingrese nombre</label>
            <input type="text" name="nombre" id="nombre">
            <label for="planeta">Ingrese planeta</label>
            <select name="planeta" id="planeta">
                <option value="tierra">Tierra</option>
                <option value="marte">Marte</option>
                <option value="venus">Venus</option>
            </select>
            <input type="submit" value="registrar">
        </form>
    </div>

</main>
</body>

</html>