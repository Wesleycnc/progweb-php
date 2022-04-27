<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionais-PHP</title>

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
    echo "<p>$numero é maior que $outroNumero!<?p>";

}
?>

<?php
$nota1 = 7;
$nota2 = 9;
$media = ($nota1 + $nota2) / 2;
echo "<p>Média: $media</p>";

if ( $media >=7 ) {
    echo "<p class=\"aprovado\">Aprovado</p>";    
} else{
    echo "<p class=\"reprovado\">Reprovado</p>";
}
?>

    <h2>Encadeadas</h2>
<?php
    if ($media >=7) {
        echo "<p class=\"aprovado\">Aprovado</p>";

    } elseif( ($media >= 6) && ($media < 5) ){
        echo "<p class=\"recuperacao\">Recuperação</p>";
    } else{
        echo "<p class=\"reprovado\">Reprovado</p>";
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

echo "<p>$assunto</p>"

?>

</body>
</html>