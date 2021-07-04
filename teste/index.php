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
                         <head><title>Sorteio</title></head>
        
		<body>
 
  <div style="text-align: right;"><?php echo "$dia[$nun] , $tempo[0] , $tempo[1] , $tempo[2] ";?><div>
                        <table align="center">
                          <form action="inseri.php" method="POST">
                            <tr><td>
                              <fieldset>
  
                                  <legend>boa sorte</legend>
                                    <p> <label for="nick">nome:</label><br />
                                    <input type="text" id="nick" name="nick"/>
                                     <strong>(nome do ts)</strong><br />
                                      <input type="submit" />
                
				
				               </fieldset>
                             </td><tr/>
  
				        </table>
<div><?php include 'pesquisa.php';?></div>
<table>
<tr>
<td class=>"versao" : 0.0 desenvolvedor lee</td>
<tr/>
</table> 
</body>

</html>
