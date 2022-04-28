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

$salario = 500; // Entrada de qualquer valor

// Declarar esta váriavel inicialmente é algo opcional
$novoSalario = 0;

if($salario < 500){
    $novoSalario = $salario *1.5;
} elseif ($salario <= 5000) {
    $novoSalario = $salario *1.10;
} else {$novoSalario = $salario *1.05;}

echo "Salário antigo $salario e Salário novo $novoSalario";
?>

<!-- 
number_format (
    valor,
    quantidade de casas decimais,
    "separador de casa decimais"
    "separador de milhar"
)
-->

<!-- Recomendado utilizar o HTML para facilitar o Back-End -->
<p>R$ <?=number_format($salario,2,",",".")?> e 
<?=number_format($novoSalario,2,",",".")?></p>
</body>
</html>