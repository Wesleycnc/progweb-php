<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionais-PHP (versão 2)</title>

    <style>
        .aprovado { color: aqua;}
        .reprovado { color: red; }
        .recuperacao { color: green; }
    </style>
</head>
<body>
    <h1>Condicionais</h1>
    <hr>

<?php
$numero = 5;
$outroNumero = 1;


if ( $numero > $outroNumero ) {
?>

   <p><?=$numero?> é maior que <?=$outroNumero?>!<p>

<?php

}

?>

<?php
$nota1 = 7;
$nota2 = 9;
$media = ($nota1 + $nota2) / 2;
?>
   <p>Média: <?=$media?></p>

   <?php
   


//Condicionais: if, else e elseif.
if ( $media >=7 ) {
?>

    <p class="aprovado">Aprovado</p>
<?php        
} else{
?>    
    <p class="reprovado">Reprovado</p>
<?php   
}
?>

    <h2>Encadeadas</h2>
<?php
    if ($media >=7) {
?>    
        <p class="aprovado">Aprovado</p>

<?php
    } elseif( ($media >= 6) && ($media < 5) ){
?>
    <p class="recuperacao">Recuperação</p>

<?php
    } else{
?>
    <p class="reprovado">Reprovado</p>

<?php
}

?>

    <h2>swich/case</h2>
<?php
$opcao = 1;

switch ($opcao) {
    
    case 1: $assunto = "Reclamação"; break;
    case 2: $assunto = "Elogio"; break;
    case 3: $assunto = "Informações"; break;
    default: $assunto = "Falar com um humano"; break;
}

?>

    <p> <?=$assunto?> </p>



</body>
</html>