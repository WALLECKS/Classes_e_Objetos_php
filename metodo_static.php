<?php
class Login
{
    /*
        Propriedades estaticas sao atributos de uma classe, sao dinamicas como as propriedades de um objeto, mas estao relacionadas à classe.
        Como a classe é a estrutura comum a todos os objetos dela derivados, propriedades estaticas sao compartilhadas entre todos os objetos
        de uma mesma classe.
    */
    public static $usuario;

    public static function usuario_autenticado()
{
        echo"usuario autenticado com sucesso";
}
}
echo( Login::usuario_autenticado()."\n");
