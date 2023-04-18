<?php
    
include_once "metodo_autoload.php";


// instanciando um novo objeto
$carlos = new Conta;


// atribuindo valores no atributos
$carlos->Nome = "Carlos Eduardo";
$carlos->setSaldo(1500);

// mostrando os valores dos atributos


var_dump($carlos->Nome);
var_dump($carlos->getSaldo());

?>