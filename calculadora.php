<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora PHP</title>
</head>
<body>
    <h1> Calculadora simples </h1>

    <form action="soma.php" method="post">
        <label for="numero1">Número 1:</label>
        <input type="number" id="numero1" name="numero1" required>
        <br><br>
        <label for="numero2">Número 2:</label>
        <input type="number" id="numero2" name="numero2" required>
        <br><br>
        <input type="submit" value="Somar">
</body>
</html>