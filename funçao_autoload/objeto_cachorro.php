<?php
// incluindo a classe cachorro
//include_once "classe_cachorro.php";

/*
no codigo abaixo o metodo autoload retornara todos os dados que foram
inserido nas variaveis dos metodos da classe. Esse metodo ( autolad )
inicia os objetos de forma automatica
*/
spl_autoload_register(
    function($class)
    {
        require "$class.objeto.php";
    }
);


// criando os objetos
$x = new Cachorro;

// atribuindo os valores dos atributos da classe cachorro
$x->nome = "luna";
$x->setRaça("Pitbull");

// imprimindo os dados dos atributos da classe 
echo $x->nome."\n";
echo $x->getRaça()."\n";

?>