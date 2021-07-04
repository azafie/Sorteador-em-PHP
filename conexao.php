<?php
$host = 'localhost';
$usuario ='';
$pass = '';
$banco='';

$conexao = mysql_connect ($host, $usuario, $pass) or die ("nao foi posivel conexao com o banco de dados");
$sqldb = mysql_select_db($banco, $conexao);

?>