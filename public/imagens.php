<?php

// DEFININDO AS VARIAVEIS
$caminho = 'upgrade/imgs/'; // VARIAVEL CONTENDO O CAMINHO QUE A IMAGEM SEJA SALVA
$images = $_FILES['image']; // VARIAVEL CONTENDO A TEG FILES['nome_do_campo_formulario_recebe_imagem']

/*
    ABAIXO FOI CRIADA UMA VALIDAÇAO UTILIZANDO O COMANDO IF PARA QUE SE A IMAGEM
    FOSSE ENVIADA APARECESSE UMA MSG INFORMANDO AO USUARIO QUE A FOTO FOI ENVIADA
    COM SUCESSO, CASO CONTRARIO RETORNARIA FALA DE ENVIO.
*/
if(move_uploaded_file($images['tmp_name'], $caminho. $images['name']))
echo 'FOTO enviada com sucesso';
else
    echo'FALHA DE ENVIO';