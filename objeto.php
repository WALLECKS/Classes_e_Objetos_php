<?php
/*incluir as classes*/
include_once "classe_cliente.php";
include_once "classe_conta.php";
include_once "ContaCorrente.php";

/* criar os objetos */
$carlos= new Cliente();
$conta = new Conta('');


/* atribuir os valores do objeto CARLOS*/
$carlos->nome= 'Carlos';
$carlos->sobrenome = 'Henrique dos Santos';
$carlos->datanascimento = '16/02/2000';
$carlos->cpf =12345678;

/* atribuir os valores do objeto CONTA*/
$conta->codigo = 157;
$conta->argencia = 014;
$conta->titular = "{$carlos->nome } {$carlos->sobrenome}";
$conta->datacriaçao = '15/02/2022';
$conta->senha = 123456;
$conta->saldo= 1500;


/*mostrar o objeto CARLOS*/
 echo"==================== Manipulando o objeto {$carlos->nome} ==============================\n";
echo"nome do cliente = {$carlos->nome} {$carlos->sobrenome}\n";
echo"data de nascimento = {$carlos->datanascimento}\n";
print"cpf = {$carlos->cpf}\n";

/*mostrar o objeto CONTA*/
echo"==================== Manipulando o objeto conta ===============================\n";
echo"Operaçao = {$conta->codigo}\n";
echo"Argencia = {$conta->argencia}\n";
echo"Titular = {$conta->titular}\n";
echo"Data de criaçao = {$conta->datacriaçao}\n";
echo"Senha = {$conta->senha}\n";
echo"Saldo = R$ {$conta->saldo}\n";

/* manipulando a conta de Carlos*/
echo"=================== Movimentaçao da conta do usuario =========================\n";
$conta->depositar(20);
echo"Saldo apos o Deposito = R\$ {$conta->saldo}\n";
$conta->retirar(60);
echo"Saldo apos a Retirada = R$ {$conta->saldo}\n";


?>