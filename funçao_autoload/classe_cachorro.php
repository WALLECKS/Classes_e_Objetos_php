<?php 
class Cachorro{

// atributos da classe
    var $nome;
    public $idade;
    protected $raça;

// metodo nome
    function Nome($Nome){
        $this->nome = $Nome;
    }
// metodo IDADE
    public function Idade($Idade){
        $this->idade = $Idade;
    }
// metodo RAÇA
    function setRaça($Raça){
    $this->raça = $Raça;
    }
    function getRaça(){
        return $this->raça;
        }
}

?>