<?php 
// incluir o arquivo que contem a classe
spl_autoload_register(
    function($tag){
        require"classe_cachorro.php";
    }
);

$y = new Cachorro;
echo $y->nome = "batata"."\n";
?>