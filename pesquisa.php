<!-- Última versão CSS compilada e minificada -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Tema opcional -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Última versão JavaScript compilada e minificada -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<?php

$host = 'localhost';
$usuario ='50529';
$pass = 'mirai10';
$banco='50529';
$conexao = mysql_connect ($host, $usuario, $pass) or die ("nao foi posivel conexao com o banco de dados");
$sqldb = mysql_select_db($banco, $conexao);

$query = mysql_query("SELECT *
FROM inicio
ORDER BY numero DESC");
?>
<div class="container">
<div class ="col-md-6 col-md-offset-3">
<table class="table table-striped">
<thead >
  <tr>
    <th> nome </th>
	<th> pontos </th>
	<th> IP </th>
  </tr>
  </thead>
  <tbody>
<?php
while ($row = mysql_fetch_array($query, MYSQL_NUM)) {
?>
	
	<tr>
	  <td><?php echo $row[1]; ?></td>
	  <td><?php echo $row[2] ; ?></td>
	  <td><?php echo $row[3] ; ?></td>
	  
	</tr>  
<?php } ?>
	
	</tbody>
</table>
</div>
</div>
	   

 








    