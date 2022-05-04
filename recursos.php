<?php 
const ESCOLA = "Senac";
$curso = "Progrmador Web";
$tecnologias = ["HTML", "CSS", "Javascript", "PHP"];

function verificaLdade(int $valor):string{

    if ($valor >=18){
        return "maior";
    } else {
    return "menor";

    }
}
