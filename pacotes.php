<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pacotes Turisticos</title>
</head>

<body>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="50" align="left" valign="middle"><img src="img/pacote-turistico.png" width="206" height="27" /></td>
  </tr>
  <tr>
    <td height="100%" align="center" valign="top">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="20%" height="100%" align="center" valign="top">
<table width="50%" border="0" cellspacing="0" cellpadding="0">
<!-- ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->			
<?php
$x=1;

	include_once("conectar.php");
		$sql= MYSQL_QUERY("select * from pacotes order by ds") or die(mysql_error());
		while ($campo = mysql_fetch_row($sql)){	
				$y=1;
				$conteudo="select * from fotos where cat='pacotes' and id='".$campo[0]."'";
				$consulta= MYSQL_QUERY($conteudo) or die(mysql_error());
					while ($imagem = mysql_fetch_row($consulta))
					{	
							if ($y=1)
							{
								$img="fotos/img/".$imagem[2];
								$y=$y+1;
							}
					 } 
					 $val=$campo[9]." <strong>R$</strong>";
echo("
  <tr>
    <td align='center' valign='top'>
						<a target='frame' href='conteudopacotes.php?cd=".$campo[0]."'>
						<table width='100%' border='0' cellspacing='0' cellpadding='0'>
						  <tr>
							<td><img height='150' src='".$img."' /></td>
						  </tr>
						  <tr>
							<td>".$campo[1]."</td>
						  </tr>
						  <tr>
							<td>".$val."</td>
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

if (isset($_GET["cd"])) { 
    $link="conteudopacotes.php?cd=".$_GET["cd"]; 
} else { 
    $link="conteudopacotes.php?cd=".$cd; 	
}
		
?>


<!-- ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->			
</table>
</td>
    <td align="center" valign="top"><iframe frameborder="0" src="<?php echo($link); ?>" scrolling="auto" align="top" name="frame" width="100%" height="800"></iframe></iframe></td>
  </tr>
</table>
    
    </td>
  </tr>
</table>

</body>
</html>