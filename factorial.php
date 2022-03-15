<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial</title>
</head>
<body>
    <h2>Factorial</h2>
    <form action="" method="get">
        <input type="number" name="numero">
        <input type="submit" value="Calcular Factorial">
    </form>
    <?php
        $numero = $_GET['numero'];
        $i = $numero;
        $total =1;
        while($i>0){
            $total=$total*$i;
            $i--;
        } 
        echo "<input type='text' value=".$total." disabled>";
    ?>
</body>
</html>