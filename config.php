<?php
$servidor = "localhost";
$usuario = "root";
$senha=  "";
$banco= "orcamento";

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);
mysql_query($conexao, 
"CREATE TABLE teste(
	id int AUTO_INCREMENT, 
	nome VARCHAR (16);
	PRIMARY KEY (16);
	);
");
?>