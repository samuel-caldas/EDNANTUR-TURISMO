<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Feiras &amp; Eventos</title>
</head>
<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="80" align="left" valign="middle"><img src="nossa%20frota.png" width="239" height="48"/></td>
  </tr>
  <tr>
    <td height="100%" align="center" valign="top">
    <table width="100%" height="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="20%" height="100%" align="center" valign="top">
<table width="50%" border="0" cellspacing="5" cellpadding="0">
<?php
$y=1;
	include_once("conectar.php");
		$sql= MYSQL_QUERY("select * from frota order by a") or die(mysql_error());
		while ($campo = mysql_fetch_row($sql))
{
		$conteudo="select * from fotos where cat='frota' and id='".$campo[0]."'";
		$consulta= MYSQL_QUERY($conteudo) or die(mysql_error());
			while ($imagem = mysql_fetch_row($consulta))
			{	
					if ($y=1)
					{
						$img="../fotos/img/".$imagem[2];
						$y=$y+1;
					}
			 } 

echo("
  <tr>
    <td align='center' valign='top'>
						<a target='frame' href='conteudofrota.php?cd=".$campo[0]."'>
								<table width='100%' border='0' cellspacing='0' cellpadding='0'>
										  <tr>
											<td><img src='".$img."' height=150 /></td>
										  </tr>
										  <tr>
											<td>".$campo[2]."</td>
										  </tr>
										  <tr>
											<td>".$campo[5]."</td>
										  </tr>
								</table>
						</a>
</td>
</tr>
");
}


?>
  <tr>
    <td align='center' valign='top'>
						<a target='frame' href='addfrota.php'>
								<table width='100%' border='0' cellspacing='0' cellpadding='0'>
										  <tr>
											<td width="200" align="center" valign="middle"><img src='criar.png' height=150 /></td>
								  </tr>
										  <tr>
											<td align="center" valign="middle">Criar um Novo Item</td>
										  </tr>
								</table>
						</a>
</td>
</tr>
<!-- ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->			
</table>
</td>
    <td align="center" valign="top"><iframe src="addfrota.php" scrolling="auto" align="top" name="frame" width="100%" height="900" frameborder="0"></iframe></iframe></td>
  </tr>
</table>
    
    </td>
  </tr>
</table>
</body>
</html>