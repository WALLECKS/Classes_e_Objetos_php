<?php
class ContaPoupança extends Conta
{
/* atributo da classe ContaPoupança */
    var $aniversario;

// trabalhando com os metodos da classe Conta poupança
        function __construct($codigo,$argencia,$titular,$datacriaçao,$senha ,$saldo, $aniversario)
        {
// chamando os metodos da classe pai( Conta )
            parent:: __construct($codigo,$argencia,$titular,$datacriaçao,$senha ,$saldo);
            $this->aniversario = $aniversario;
        
        }
// manipulando os metodos da classe filha ( ContaPoupança )
        function saque($quantia)
        {
            if($this->saldo >= $quantia)
            {
                parent::retirar($quantia);
            } 
            else 
            {
                echo "retirada não permitida, saldo insuficiente !";
                return false;
            }
        }

}

?>