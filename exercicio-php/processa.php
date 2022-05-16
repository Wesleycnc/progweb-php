<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento</title>
</head>
<body>
   <h1>Dados</h1>
   <hr>


<?php
if ( ! empty( $_POST ) ){
    $nome = $_POST['nome'];
    $fabricantes = $_POST['fabricantes'];
    $preco = $_POST['preco'];
    $quantidade = $_POST['quantidade'];
    $descricao = $_POST['descricao'];



    
}
// Filtros
  $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);  
  $quantidade = filter_input(INPUT_POST, 'quantidade', FILTER_SANITIZE_NUMBER_INT);  
  $descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_SPECIAL_CHARS);

?>
<?php
if( empty($_POST["nome"]) || empty($_POST["fabricantes"]) || empty($_POST["preco"]) || empty($_POST["quantidade"]) || empty($_POST["descricao"]) ){?>
    <p style="color:red"> Por favor preencha todos os campos</p>
<?php
}else {?>
    <p style="color:green">Seus dados foram enviados corretamente!!</p>
<?php
}  
?>

    
    <ul>
        <li>Nome do produto: <?=$nome?> </li>
        <li>Fabricante do produto: <?=$fabricantes?> </li>
        <li>preço do produto: <?=$preco?></li>
        <li>Quantidade de produtos: <?=$quantidade?> </li>
        <li>Descrição do produto: <?=$descricao?> </li>
    </ul>
 

    


  

  
</body>
</html>