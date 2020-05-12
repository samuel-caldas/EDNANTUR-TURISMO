<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Criar</title>
</head>
<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center" valign="middle"><img src="load.gif" width="400" height="400"align="middle" /></td>
  </tr>
 </table>
		<?php
				include_once("conectar.php");
				$nome=$_GET["nome"];
				$senha=$_GET["senha"];
				$inserir= "INSERT INTO login ( n, s) VALUES ('".$nome."', '".$senha."')"; 
				mysql_query($inserir) or die ("falha na inserção dos dados!");
				echo ("dados inseridos com sucesso!");
		?>
		<script>
			history.back();
		</script>
</body>
</html>