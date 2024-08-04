<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 13</title>

</head>
<body>
<header>
    <?php include '../header.php'; ?>
</header>

<div class="menu">
    <h2>menu</h2>
    <form action="listarMenu.php" method="post">
        <input type="checkbox" id="entrada" name="pedido[]" value="entrada">
        <label for="entrada">Entrada</label><br>
        <input type="checkbox" id="plato_principal" name="pedido[]" value="plato_principal">
        <label for="plato_principal">Plato principal</label><br>
        <input type="checkbox" id="acompanamiento" name="pedido[]" value="acompanamiento">
        <label for="acompanamiento">Acompañamiento</label><br>
        <input type="checkbox" id="postre" name="pedido[]" value="postre">
        <label for="postre">Postre</label><br><br>
        <input type="submit" value="Enviar">
    </form>

</div>

</body>
</html>
