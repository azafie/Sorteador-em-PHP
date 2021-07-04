<?php ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
                         <head>

<!-- Última versão CSS compilada e minificada -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Tema opcional -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Última versão JavaScript compilada e minificada -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


<?php $ip = $_SERVER["REMOTE_ADDR"]; 

?>
						           <title>Sorteio</title>
						 <link rel="stylesheet" type="text/css" href="css/estilo.css" media="all" />
						   
						 </head>
        <body>
<h4>seu IP : <?php echo $ip;?></h4>
  
                        <table align="center">
                          <form action="inseri.php" method="POST">
                            <tr><td>
                              <fieldset>
  
                                  <legend>Boa Sorte Mirai</legend>
                                    <label for="nick">nome:</label><br />
                                    <input type="text" id="nick" name="nick" class="form-control"/>
									<input type="hidden" name="ip"value="<?php echo $ip;?>">
                                     
                                      <button type="submit" class="btn btn-success">Enviar</button>
                
				
				               </fieldset>
                             </td><tr/>
  
				        </table>
<div><?php include 'pesquisa.php';?></div>
<table align="right">
<tr>
<td class="versao"> versao : 0.0 desenvolvedor lee</td>
<tr/>
</table> 
</body>

</html>
