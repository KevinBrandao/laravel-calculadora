<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <form action = "/calcular" method = "POST">
        @csrf
        <input type = "number" name = "num1" placeholder = "Número 1">
        <input name = 'op' placeholder = "Operador">
        <input type = "number" name = "num2" placeholder = "Número 2">
        <button type = "submit">Somar</button>
    </form> 
</body>
</html>