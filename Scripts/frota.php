<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Nossa Frota</title>
</head>

<body>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="left" valign="middle" height="60"><img src="img/nossa%20frota.png" width="204" height="39" /></td>
  </tr>
  <tr>
    <td height="100%" align="center" valign="top">
    <table width="100%" height="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="20%" height="100%" align="center" valign="top">
    


<table width="50%" border="0" cellspacing="0" cellpadding="0">






<!-- ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->			
<?php
$x=1;
	include_once("conectar.php");
		$sql= MYSQL_QUERY("select * from frota order by a") or die(mysql_error());
		while ($campo = mysql_fetch_row($sql))
{
$y=1;
		$consulta= MYSQL_QUERY("select * from fotos where cat='frota' and id=".$campo[0]) or die(mysql_error());
		while ($imagem = mysql_fetch_row($consulta))
		{	
				if ($y=1)
				{
					$img="frota/".$imagem[2];
					$y=$y+1;
				}
		 } 
	$img="frota/".$cd;
echo("
  <tr>
    <td align='center' valign='top'>
						<a target='frame' href='conteudofrota.php?cod=".$campo[0]."'>
								<table width='100%' border='0' cellspacing='0' cellpadding='0'>
										  <tr>
											<td><img src=".$img." width=200 height=150 /></td>
										  </tr>
										  <tr>
											<td>".$campo[3]."</td>
										  </tr>
										  <tr>
											<td>".$campo[5]."</td>
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
$link="conteudofrota.php?cod=".$cd; 
?>
<!-- ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->			
</table>
</td>
    <td align="center" valign="top"><iframe src="<?php echo($link); ?>" scrolling="auto" align="top" name="frame" width="100%" height="810" frameborder="0"></iframe></iframe></td>
  </tr>
</table>
    
    </td>
  </tr>
</table>

</body>
</html>