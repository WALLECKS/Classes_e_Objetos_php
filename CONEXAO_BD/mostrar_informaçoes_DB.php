<?php
// ABRIR CONEXAO COM O BANCO DE DADOS POSTGRESQL
$conectdb = pg_connect("host=127.0.0.1 port=5432 dbname=postgres user=postgres password=Picole157");

// DEFINE CONSULTA QUE SERA REALIZADA NO BANCO DE DADOS
$query = 'SELECT nome, funçao FROM FUNCIONARIOS';

// ENVIAR CONSUTA AO BANCO DE DADOS POSTGRESQL
$result = pg_query($conectdb , $query);

if ($result)
{// PERCORRER RESULTADOS DA PESQUISA
    while( $row = pg_fetch_assoc($result))
    {
        echo $row['nome'].'-'. $row['funçao'. "\n"];
    }
}

// FECHAR A CONEXAO
pg_close($conectd);
?>