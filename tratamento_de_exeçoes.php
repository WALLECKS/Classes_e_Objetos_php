<?php
/*
Para tratamentos de erros utilzamos o try e catch alem de alguns metodos descritos abaixo :

1 >> getMessage() = retorna a mensagem de erro
2 >> getCode() =  retorna o codigo de erro
3 >> getFile() = retorna o arquivo na qual ocorreu o erro.
4 >> getLine() = retorna a linha onde ocorreu o erro.
5 >> getTrace() = retorna um array com as ações ate o erro.
6 >> getTraceAsString() = retorna as ações em forma de strings.

*/




function Abrir($objeto = null)
{  
    if(!$objeto) // se o arquivo nao existir retorne falso
    {
        throw new Exception('arquivo nao existe'); // gera uma exeçao de erro
        return false;
    }

    if(!file_exists($objeto)) // se a existencia do arquivo nao existir retorne falso
    {
        throw new Exception('arquivo inexistente');
        return false;
    }
    return true;
}

 // tratamento de exeçoes utiliza o try e o catch como ja linguagem JAVA
try{
    
$arquivo = Abrir('/home/invisible_ghost/Documentos/estudos_PHP/objeto.php'); // atribuindo o caminho e o nome do arquivo
// mostrando o arquivo
var_dump($arquivo);
}

//capituramos a exeção
catch(Exception $exceçao)
{
    echo $exceçao->getFile().':'. $exceçao->getMessage();
}

?>