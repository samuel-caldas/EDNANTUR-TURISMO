<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Feiras &amp; Eventos</title>
</head>

<body>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="80" align="left" valign="middle"><img src="img/feiras.png" width="200" height="69" /></td>
  </tr>
  <tr>
    <td height="100%" align="center" valign="top">
    <table width="100%" height="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="20%" height="100%" align="center" valign="top">
    


<table width="50%" border="0" cellspacing="0" cellpadding="0">






<!-- ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->			
<?php

	include_once("conectar.php");
		$sql= MYSQL_QUERY("select * from feira order by ds") or die(mysql_error());
		while ($campo = mysql_fetch_row($sql))
{
		$y=1;
		$conteudo="select * from fotos where cat='feiras' and id='".$campo[0]."'";
		$consulta= MYSQL_QUERY($conteudo) or die(mysql_error());
			while ($imagem = mysql_fetch_row($consulta))
			{	
						$img="fotos/img/".$imagem[2];
			 } 

echo("
  <tr>
    <td align='center' valign='top'>
						<a target='frame' href='conteudofeiras.php?cd=".$campo[0]."'>
								<table width='100%' border='0' cellspacing='0' cellpadding='0'>
										  <tr>
											<td><img src='".$img."' height=150 /></td>
										  </tr>
										  <tr>
											<td>".$campo[3]."</td>
										  </tr>
										  <tr>
											<td>".$campo[5]."</td>
										  </tr>
										   <tr>
											<td>&nbsp;</td>
										  </tr>
										  <tr>
											<td>&nbsp;</td>
										  </tr>
								</table>
						</a>
</td>
</tr>
");

if ($x=1)
{
	$cd=$campo[0];
	$x=$x+1;
}
 }
$link="conteudofeiras.php?cd=".$cd; 
?>
<!-- ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->			
</table>
</td>
    <td align="center" valign="top"><iframe src="<?php echo($link); ?>" scrolling="auto" align="top" name="frame" width="100%" height="800" frameborder="0"></iframe></iframe></td>
  </tr>
</table>
    
    </td>
  </tr>
</table>

</body>
</html>