<?php
// DEFININDO AS VARIAVEIS
$file = fopen('nome_arquivo','r'); // abre o arquivo entre '', na segunda '' se refere ao valor de saida ex: r equivale a somente leitura. para mais informaçoes verifique na documentaçao do php
while ( !feof($file)) // a funçao feof ler todos os dados de um  arquivo, nesse caso colocamos um loop para ler e mostrar todas as linhas do arquivo, ou seja, enquanto nao for executado o comando abaixo ele ficara lendo o arquivo ate a ultima linha
{
    echo fgets($file,4096 . "<br>"); // mostra todos as informaçoes de uma linha do arquivo. 4096 se refere a quantidade de caracteres de uma linha 
}

fclose($file); //fecha o arquivo file

?>