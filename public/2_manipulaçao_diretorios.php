<?php

var_dump(is_dir('upgrade')); // verifica se o arquivo 'upgrade' é um diretorio
var_dump(mkdir('VIEWS'));   // cria uma pasta chamada VIEWS
var_dump(rmdir('nome_do_diretorio')); // remove diretorios vazios
var_dump(getcwd('')); // mostra o caminho em que o usuario se encontra, semelhante ao PWD
var_dump(scandir('.')); // escaneia o caminho indicado entre '.' == caminho atual
glob('../*.php'); // escaneia o caminho indicado entre  '', neste caso estamos escaneado todos os arquivos do diretorio atual que possuem extençoes .php 
?>