<?php
// ABRIR CONECÇAO COM O BANCO DE DADOS POSTGRESQL
$conectDB = pg_connect("host=localhost port = 5432 dbname = postgres2 user = alex password = Picole157");

// INSERRIR REGISTROS NO BANCO DE DADOS
pg_query($conectDB,"INSERT INTO frutas (CODIGO, NOME) VALUES(1, 'Erica Rodrigues')");
pg_query($conectDB,"INSERT INTO frutas (CODIGO, NOME) VALUES(2, 'Rodrigo Ribeiro')");
pg_query($conectDB,"INSERT INTO frutas (CODIGO, NOME) VALUES(3, 'Alex Pereira')");
pg_query($conectDB,"INSERT INTO frutas (CODIGO, NOME) VALUES(4, 'Douglas Ricardo')");

// FECHAR A CONEXAO COM O BANCO DE DADOS
pg_close($conectDB);


?>