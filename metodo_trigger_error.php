<?php
/*
esse é um metodo mais correto de retornar um erro na qual
define funções que retornam erros e manipulam erros.
Vamo utilizar o metodo trigger_erros com os valores abaixo
E_USER_NOTICE >> gera uma noticia
E_USER_WARNING >> gera um alerta
E_USER_ERROR >> gera um erro fatal
*/



function Abrir($objeto = null)
{  
    if(!$objeto) // se o arquivo nao existir retorne falso
    {   
        trigger_error('aquivo nao exite',E_USER_NOTICE);
        return false;
    }

    if(!file_exists($objeto)) // se a existencia do arquivo nao existir retorne falso
    {
        trigger_error('arquivo nao existente', E_USER_WARNING);
        return false;
    }
    return true;
}

// atribuindo o caminho e o nome do arquivo 
$arquivo = Abrir('/home/invisible_ghost/Documentos/estudos_PHP/objeto.php');

// mostrando o arquivo
var_dump($arquivo);
?>