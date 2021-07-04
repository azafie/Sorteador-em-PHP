<?php
$host = 'localhost';
$usuario ='5871';
$pass = 'morganas';
$banco='5871';

$conexao = mysql_connect ($host, $usuario, $pass) or die ("nao foi posivel conexao com o banco de dados");
$sqldb = mysql_select_db($banco, $conexao);

?>