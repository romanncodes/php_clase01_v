<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="index.php">Home</a>
    <h1>Formulario en PHP</h1>

    <form action="controllers/controlador.php" method="POST">
        <input type="text" name="nombre" placeholder="Tu Nombre">
        <br>
        <input type="text" name="edad" placeholder="Tu edad">
        <br>
        <button>Saludame</button>
    </form>

</body>

</html>