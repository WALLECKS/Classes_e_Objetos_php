<?php
class Aluno
{
    public $idade;
    

    public function __clone()
    {
        echo "Utilizando o metodo clonagem ";
    }
}

$pedro = new Aluno;

$pedro->idade = 19;
var_dump($pedro);


$pedro2 = clone $pedro;

$pedro2->idade = 36;
var_dump($pedro2);