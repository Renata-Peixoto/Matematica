<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title></title>
</head>
<body>
<?php
    $valor1 =  $_POST["num1"];
    $valor2 = $_POST["num2"];
    $op = $_POST['operacao'];
  
    switch ($op) {
        case 'soma':
            $resultado = $valor1 + $valor2;
             echo '<div class="alert alert-danger">A soma é:</div>'.$resultado;
            break;
        case 'subtracao':
            $resultado = $valor1 - $valor2;
            echo'<div class="alert alert-danger">A Subtração é:</div>'.$resultado;
            break;
        case 'mutiplicacao':
            $resultado = $valor1 * $valor2;
            echo'<div class="alert alert-danger">A mutiplicação é:</div>'.$resultado;
            break;
        case 'divisao':
            $resultado = $valor1 / $valor2;
            echo'<div class="alert alert-danger">A Divisão é:</div>'.$resultado;
            break;
        default:

            break;
    }
    ?>
</body>
</html>