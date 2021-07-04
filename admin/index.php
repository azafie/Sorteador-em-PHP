<!-- Última versão CSS compilada e minificada -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Tema opcional -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Última versão JavaScript compilada e minificada -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<?php
$dia[0] = "domingo";
$dia[1] = "segunda";
$dia[2] = "terça";
$dia[3] = "quarta";
$dia[4] = "quinta";
$dia[5] = "sexta";
$dia[6] = "sabado";
$nun = date("w") ;
 $tempo[0] = date("d");
 $tempo [1] = date("m"); 
 $tempo[2] = date("Y");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head><title></title>

  <head>
  
  <body>
<div class ="container"> 
 <div style="text-align: right;"><?php echo "$dia[$nun] , $tempo[0] , $tempo[1] , $tempo[2] ";?></div>
<div> 
 <A HREF ="deleta.php" style="margin: 0 auto; display: block;" class="btn btn-danger"> 
 <center> Limpa tudo e novo sorteio </center>
  </A>
  </div>
    <div><?php include 'pesquisa.php';?></div>
 </div>
 </body>
</html>

