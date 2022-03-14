<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicios Hito Grupal</title>
</head>
<body>
    <h1>Ejercicios Hito Grupal</h1>
    <?php
        require_once('aleatorio.php');
        require_once('mayor.php');

        echo "<h2>4. Generar un número aleatorio entre 1 y 10 incluido los extremos.</h2>";
        echo "El numero aleatorio entre 1 y 10 es: ".aleatorio::numAleatorio();
        echo "<hr>";

        echo "<h2>5. Determinar el mayor número entre los números de un array de enteros.</h2>";
     
        echo "El mayor número del array es: ".mayor::numMayor([5,6,3,1,8]);
    ?>

</body>
</html>
