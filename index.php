<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dani guapo</title>
</head>
<body>
    <form action="" method="post">
        <h2>Escribe algo</h2>
        <input type="text" name="texto">
        <input type="submit" value="Enviar">
    </form>
    <br>
</body>
</html>
<?php
$text= $_POST['texto'];
echo "<h2>Caracteres totales:</h2>";
echo strlen($text);
echo "<h2>Número de aparciones de la letra a</h2>";
echo substr_count($text, 'a');
?>