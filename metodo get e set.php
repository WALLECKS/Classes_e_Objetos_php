<?php
class Conta
{
    // atributos da conta
    private $Codigo;
    private $Saldo;
    public $Nome;
// manipulando o metodo Codigo da classe

    function setCodigo($Codigo)
    {
        $this->Codigo = $Codigo;
    }
    function getCodigo()
    {
        $this->Codigo;
    }
// manipulando o metodo da classe Conta

    function setSaldo($Saldo)
    {
        $this->Saldo = $Saldo;
    }
    function getSaldo()
        {return $this->Saldo;}

// manipulando o metodo Nome

    function Nome($nome)
    {
        $this->Nome = $nome;
        
    }
}


?>