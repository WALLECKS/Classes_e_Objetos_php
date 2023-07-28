<?php

var_dump(is_dir('upgrade')); // verifica se o arquivo 'upgrade' é um diretorio
var_dump(mkdir('VIEWS'));   // cria uma pasta chamada VIEWS
var_dump(rmdir('nome_do_diretorio')); // remove diretorios vazios
var_dump(getcwd('')); // mostra o caminho em que o usuario se encontra, semelhante ao PWD
var_dump(scandir('.')); // escaneia o caminho indicado entre '.' == caminho atual
glob('../*.php'); // escaneia o caminho indicado entre '', neste caso estamos escaneado todos os arquivos do diretorio atual que possuem extençoes .php 
var_dump(file_exists('images.php')); // verifica se existe o arquivo images.php
touch('teste.txt'); //cria um arquivo 'nome.extençao'
copy('nome_arquivo', 'novo_nome'); // copia um arquivo
rename('images.php', 'images2.php'); // renomeia um arquivo
var_dump(unlink('nome_arquivo')); // exclui um arquivo
var_dump(file_put_contents('nome_arquivo','valor a ser passado')); // escreve um valor dentro de um arquivo
var_dump(file_get_contents('nome_arquivo')); // retorna o conteudo de um arquivo
?>