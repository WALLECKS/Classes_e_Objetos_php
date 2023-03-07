<?php
// criando a classe ContaCorrentePoupança com os atributos da classe pai Conta
class ContaCorrentePoupança extends Conta
{
// definindo os atributos da classe ContaCorrentePoupança
    var $limite;

// manipulando os metodos da classe ContaCorrentePoupança onde a variavel limite tambem sera iniciada logo na criaçao do objeto
function __construct($codigo,$argencia,$titular,$datacriaçao,$senha ,$saldo, $limite)
{
// chamando os metodos da classe pai( Conta )
    parent::__construct($codigo,$argencia,$titular,$datacriaçao,$senha ,$saldo);
    $this->limite = $limite;

}
    
/*
metodo retirar
*/
function retirar($quantia)
{
    //imposto
    $icms = 0.5;
if($this->saldo + $this->limite >= $quantia)
{
    // executa o metodo da classe pai
    parent:: retirar($quantia);

    // debita o imposto
    parent:: retirar($quantia * $icms);
}


}

}



?>