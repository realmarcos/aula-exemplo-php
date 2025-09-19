<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Soma</title>
</head>
<body>
    
 <h1>Resultado da soma</h1>

<br>

<?php 
    $numero1 = $_POST["numero1"];
    $numero2 = $_POST["numero2"];
    
    $soma = $numero1 + $numero2;

    echo "A soma de $numero1 + $numero2 = $soma";
?>
</body>
</html>