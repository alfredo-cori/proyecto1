<!DOCTYPE html>

<html lang="en">

<head>
    <title>Registrar Usuraio</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- enlazando al archivo estilo.css -->
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>

<body>

    <!-- método post para enviar datos -->
    <form method="post">
        <h1>¡Suscribite!</h1>
        <input type="text" name="name" placeholder="Nombre completo">
        <input type="email" name="email" placeholder="Email">
        <input type="submit" name="register">
    </form>
    <!-- extencion regitrar.php -->
    <?php
    include("registrar.php");
    ?>

</body>

</html>