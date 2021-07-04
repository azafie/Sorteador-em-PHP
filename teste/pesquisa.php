<?
require 'conexao.php';

$conexao = mysql_connect ($host, $usuario, $pass) or die ("nao foi posivel conexao com o banco de dados");
$sqldb = mysql_select_db($banco, $conexao);

$result = mysql_query("SELECT * FROM inicio ORDER BY numero DESC");
?>
<table align="center" border=5>
  <tr>
    <td>nome</td>
	<td>pontos</td>
  </tr>
<?php
while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
    ?>
	
	<tr>
	  <td><?php echo $row[1]; ?></td>
	  <td><?php echo $row[2] ; ?></td>
	</tr>  
<?php } ?>
	
	</table>
	   

<?php 


mysql_free_result($result);
?> 