<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="formulario.php">Formulario</a><br>
    <a href="form_sueldo.php">Sueldos</a>
    <br>
    <h1>Clase #01 PHP</h1>
    <h2>Variables</h2>

    <?php
    $nombre = "Bienvenidos a PHP!!!";
    $numero = 2020;
    $frutas = ["Guinda", "Pera", "Sandia"];
    $numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9];
    $persona = ["nombre" => "Juan", "edad" => 50];

    echo "<p>la variable nombre es: $nombre </p>";
    echo "<p>la variable numero es: $numero </p>";

    print_r($frutas);
    echo "<br>";
    print_r($numeros);
    echo "<br>";
    print_r($persona);
    echo "<br>";
    echo $persona["nombre"] . "<br>";
    echo $frutas[1] . "<br>";

    ?>
    <hr>
    <p>
        La variable nombre es <?= $nombre ?><br>
        El numero equivale a <?= $numero ?>
    </p>
    <hr>
    <h2>Recorridos con for</h2>
    <ol>
        <?php foreach ($frutas as $item) {    ?>
            <li> <?= $item ?> </li>
        <?php } ?>
    </ol>
    <hr>
    <ul>
        <?php for ($i = 0; $i < count($frutas); $i++) { ?>
            <li> <?= $frutas[$i] ?> </li>
        <?php } ?>
    </ul>
    <hr>
    <?php
    foreach ($numeros as $x) {
        if ($x % 2 == 1) {
            echo "$x ";
        }
    }

    ?>



</body>

</html>