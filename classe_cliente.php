<?php
class Cliente
{
    var $nome;
    var $sobrenome;
    var $datanascimento;
    var $cpf;
    
    function imprimir()
    { 
        print'nome '.$this->nome."\n";
        print'sobrenome '.$this->sobrenome."\n";
        print'data de nascimento '.$this->datanascimento."\n";
        print'cpf '.$this->cpf; 
    } 
}

?>