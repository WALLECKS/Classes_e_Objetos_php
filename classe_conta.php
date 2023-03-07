<?php
// criar classe
class Conta
{
// criar os atribut os da classe
    var $codigo;
    var $argencia;
    var $titular;
    var $datacriaçao;
    var $senha;
    var $saldo;
    var $valor;

/*========================================== trabalhando com os metodos da classe =================================================*/
    
/*
metodo depositar
  */    
function depositar($quantia)
    {
        if($quantia > 0){$this->saldo += $quantia;}
        
    }
/*
metodo retirar
*/
function retirar($quantia)
{
    if($quantia>0)
    $this->saldo -= $quantia;
    return $quantia;
}

/*
retornar o saldo
*/
function mostrasaldo($mostrarsaldo)
{
   return $this->saldo = $mostrarsaldo;
}

}
?>