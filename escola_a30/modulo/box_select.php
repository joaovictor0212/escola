<?php	  
function box_bairro(){	
    include ("../controle/conexao.php");
	$sql = 'SELECT * FROM bairro';
	print "<select name='cbx_bairro'>";
	foreach ($conn->query($sql) as $row) {
	  print "<option value='".$row['cod_bairro']."'>".$row['nome_bairro']."</option>";
	}
	print "</select>";
}    
?>