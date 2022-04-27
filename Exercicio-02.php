<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 2</title>
    <style>
        *{
            margin: 0;
            padding: 0;

        }

            article{
                background-color: aqua;
                height: 50%px;
                border: 1px solid;
            }
        </style>
    
</head>
<body>
    <h1>Exercicio 02</h1>
    <hr>
<?php
    //ARRAY NUMERICO
    $dados = array("Wesley", "wesleycaldas@outlook.com", 18, "Masculino");
    $dados2 = array("Maria", "mariacn@gmail.com", 20, "Feminino");
    
?>    
    <article>
    <style>
        *{
            margin: 0;
            padding: 0;

        }

          
        </style>
    
      
    <p><?= $dados[0]?></p>
    <p><?= $dados[1]?></p>
    <p><?= $dados[2]?> anos</p>
    
    <hr>

    <p class="p2"><?= $dados2[0]?></p>
    <p><?= $dados2[1]?></p>
    <p><?= $dados2[2]?> anos </p>

        
       
    </article>

</body>
</html>