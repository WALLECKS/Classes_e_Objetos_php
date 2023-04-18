<?php
// abaixo criamos uma funcao Abrir que retorna informaçoes de existencia de arquivos
function Abrir($classe_cliente = null){
    if(!$classe_cliente)  { die ('falta o paramentro com o nome do arquivo'); } // verifica o nome do arquivo
    
    if(!file_exists($classe_cliente)){  die ('o arquivo nao existe'); } // verifica se existe o arquivo

    if(!$retorno =@file_get_contents($classe_cliente)) { die ('impossivel ler o arquivo'); } // se nao retornar o arquivo entao sera impossivel ler o arquivo

    return true; // se existir o arquivo entao retorne verdadeiro
    
}


?>