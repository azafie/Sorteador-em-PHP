<?php
$host = 'localhost';
$usuario ='50529';
$pass = 'mirai10';
$banco='50529';
$conexao = mysql_connect ($host, $usuario, $pass) or die ("nao foi posivel conexao com o banco de dados");
$sqldb = mysql_select_db($banco, $conexao);




$nick = mysql_real_escape_string($_POST ['nick']);


if(empty($nick)){
header ("location:erro.php");
} // fecha vazio
else{
$nick = mysql_real_escape_string($_POST ['nick']);
$pesquisa =  Mysql_query ("SELECT * FROM `inicio` WHERE `nome` = '$nick'");
if(mysql_num_rows($pesquisa)>=1){
mysql_freeresult($pesquisa);
header ("location:trapaca.php");
} // fexa num ronw
else{
$nick = mysql_real_escape_string($_POST ['nick']);
addslashes($nick);
$gera = rand(1,1000); 
$ip = $_POST ['ip'];
$inseri = " INSERT INTO `inicio` (
`chave` ,
`nome` ,
`numero` ,
`ip`
)
VALUES (
NULL , '$nick', '$gera', '$ip '
);";

$query = Mysql_query ($inseri);
if ($query){
	header("location:index.php");
	mysql_freeresult($query);
} // fexa query
else {
	
	echo "nao obteve susesso...";
	header("erro.php");
}}

 
}

?>