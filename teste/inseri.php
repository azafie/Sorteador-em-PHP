<?php
include 'conexao.php';
$nick = mysql_real_escape_string($_POST ['nick']);
if(empty("$nick")){
header ("location:erro.php");
} // fecha vazio
else{
$nick = mysql_real_escape_string($_POST ['nick']);
$pesquisa =  Mysql_query ("SELECT * FROM `inicio` WHERE `nome` = '$nick'");
if(mysql_num_rows($pesquisa)>=1){
mysql_freeresult($pesquisa);
header ("location:erro.php");
} // fexa num ronw
else{
$nick = mysql_real_escape_string($_POST ['nick']);
addslashes($nick);
$gera = rand(1,1000); 

$inseri = "INSERT INTO `5871`.`inicio` (`chave`, `nome`, `numero`) VALUES (NULL, '$nick', '$gera')";

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