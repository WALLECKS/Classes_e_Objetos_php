<?php
// abaixo criamos uma funcao Abrir que retorna informaçoes de existencia de arquivos
function Abrir($file = null) // informe o nome do arquivo a ser aberto
{
    if(!$file)  { die ('falta o paramentro com o nome do arquivo'); } // verifica o nome do arquivo
    
    if(!file_exists($file)){  die ('o arquivo nao existe'); } // verifica se existe o arquivo

    if(!$return =@file_get_contents($file)) { die ('impossivel ler o arquivo'); } // se nao retornar o arquivo entao sera impossivel ler o arquivo

    return true; // se existir o arquivo entao retorne verdadeiro
    
}

// especificar o caminho e o nome  do arquivo a ser aberto
$arquivo = Abrir('/home/invisible_ghost/Documentos/estudos_PHP.classe.cliente.php');

// mostra o arquivo

echo ("$arquivo". "\n");

?>