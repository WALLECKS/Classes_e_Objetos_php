<?php
class Login
{
    public static $usuario;

    public static function usuario_autenticado()
{
        echo"usuario autenticado com sucesso";
}
}
echo( Login::usuario_autenticado()."\n");
