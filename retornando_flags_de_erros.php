<?php
function Abrir($objeto = null)
{  
    if(!$objeto) // se o arquivo nao existir retorne falso
    {
        return false;
    }

    if(!file_exists($objeto)) // se a existencia do arquivo nao existir retorne falso
    {
        return false;
    }
    return true;
}

// atribuindo o caminho e o nome do arquivo 
$arquivo = Abrir('/home/invisible_ghost/Documentos/estudos_PHP/objeto.php');

// mostrando o arquivo
var_dump($arquivo);
?>