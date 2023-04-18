<?php

$inforCompany =[
    'nome' => 'Escola',
    'curso' => 'facimp',
    'year' => 2023
];
var_dump($inforCompany);
echo"\n";
var_dump(array_keys($inforCompany)); // mostra as chaves que contem os valores


//unset($inforCompany[/*especificar o valor da posiçao do array para ser excluida */]);

    sort($inforCompany);// ordena os valoes de forma crescente
var_dump($inforCompany); 
?>