<?php
include 'conexao.php';
$del = "TRUNCATE TABLE inicio ";
$delgo = mysql_query($del) or die('Erro ao deletar');
if ($delgo){
echo "apagou";
header("location:index.php");
}
else{
 echo	"não apagou";
}
?>