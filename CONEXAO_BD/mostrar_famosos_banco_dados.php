<?php
// ABRIR CONEXAO COM O BANCO DE DADOS POSTGRESQL
$conectDB = pg_connect("host=localhost port = 5432 dbname = banco_test user = alex password = ");

// DEFINE CONSULTA QUE SERA REALIZADA NO BANCO DE DADOS
$query = 'SELECT codigo, nome FROM famosos';

// ENVIAR CONSUTA AO BANCO DE DADOS POSTGRESQL
$result = pg_query($conectDB, $query);

if ($result)
{// PERCORRER RESULTADOS DA PESQUISA
    while( $row = pg_fetch_assoc($result))
    {
        echo $row['codigo'].'-'. $row['nome'. "<br> \n"];
    }
}

// FECHAR A CONEXAO
pg_close($conectDB);
?>