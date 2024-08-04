<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 14</title>
</head>
<body>
<header>
    <?php include '../header.php'; ?>
</header>
<main>
    <div>
        <h2>Ingrese el tamano de la matriz cuadrada</h2>
        <form action="procesar.php" method="post">
            <input type="number" name="tamano" required>
            <input type="submit" value="crear">
        </form>
    </div>
</main>
</body>
</html>



