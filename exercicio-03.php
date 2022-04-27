<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 3</title>
</head>
<body>
    <h1>Exercicio</h1>
    <hr>
<?php

$salario = 2000;
/* $salario2 = 1000; */
$aumento = ($salario);


if ($salario < 500) {
    echo $aumento * 1.15;
} elseif( ($salario <1000) ){
    echo $aumento * 1.10;

} else{
    echo $aumento * 1.05;    
}



?>   
</body>
</html>