<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="index.php">Home</a>
    <h1>Calculo de sueldo</h1>

    <form action="controllers/ControlSueldo.php" method="POST">
        <input type="text" name="sueldo" placeholder="Sueldo Base">
        <br><br>
        <select name="desc">
            <option value="0.2">20%</option>
            <option value="0.25">25%</option>
            <option value="0.3">30%</option>
        </select>
        <br><br>
        <button>calcular</button>
    </form>

    <p>
        <?php
        session_start();
        if (isset($_SESSION['respuesta'])) {
            echo $_SESSION['respuesta'];
            unset($_SESSION['respuesta']);
        }

        ?>
    </p>

</body>

</html>