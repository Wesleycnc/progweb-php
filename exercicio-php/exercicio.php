<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercico de processamento de dados</title>
</head>
<body>
    
    <h1>Dados do produto</h1>
    <hr>
    
    <form action="processa.php" method="post">
        <p>
            <label for="nome">Nome do produto:</label>
            <input type="text" name="nome" id="nome">
        </p>

<?php
    $fabricantes = [ "", "Samsung", "LG", "Sony", "Panasonic" ]
?>
        
            <label for="fabricantes">Fabricante:</label>
            <select name="fabricantes" id="fabricantes">
            <?php foreach ($fabricantes as $fabri){ ?>
                <option value="<?=$fabri?>"> <?=$fabri?> </option>
                <?php } ?>
            </select>
        

        <p>
            <label for="number">Preço:</label>
            <input type="number" min="100" max="10000.01" step="0.01" name="preco" id="preco" />
        </p>

        <p>
            <label for="quantidade">Quantidade:</label>
            <input type="number" min="0" max="50" name="quantidade" id="quantidade">
        </p>

        <p>
            <label for="descricao">Descrição do produto:</label>
            <textarea name="descricao" id="descricao" cols="30" rows="10"></textarea>
        </p>

        <button type="submit" name="enviar">Enviar dados</button>
    </form>
</body>
</html>