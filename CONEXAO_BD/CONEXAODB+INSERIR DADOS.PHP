<?php
# conectando ao banco de dados POSTGRES
$conectdb = pg_connect("host=127.0.0.1 port=5432 dbname=postgres user=postgres password=Picole157");
# inserindo valores no banco de dados
pg_query($conectdb, "INSERT INTO FUNCIONARIOS (nome, funçao, setor, nivel_escolaridade, cod_funcionario) VALUES ('alex silva alencar', 'AUXILIAR DE PRODUÇAO','PRODUÇAO','MEDIO',6)");
# fechando a conexao com o banco de dados
pg_close($conectdb);

?>