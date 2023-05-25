<?php
$a = "wallecks";
/*
se a variavel $a for uma string mostre o valor de print
*/


if (is_string($a))
{
    print"'e uma string'\n";

}
/*
se a variavel $a nao for um numerico mostre o valor de print
*/

if ( !is_numeric($a))
{
    print 'o valor nao  e numerico'."\n";
}

// caso o valor de $a seja nullo retorne o valor de $a
if(is_null($a))
{
    return true;
}

?>