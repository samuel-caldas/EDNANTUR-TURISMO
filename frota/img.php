<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>img</title>
</head>
<body>
<table border="0" cellspacing="0" cellpadding="0" align="center">
<tr>
  <td align='center' valign='middle'><strong>
      <a href='../fotos/deletarimg.php?cd=<?php echo ($cd); ?>'>
      Apagar imagem
      </a>
      </strong>
  </td>
</tr>
<tr>
<?php
$cd=$_GET["cd"];
	include_once("conectar.php");
		$sql= MYSQL_QUERY("select * from fotos where cd=".$cd) or die(mysql_error());
		while ($campo = mysql_fetch_row($sql))
		{	
			$img="../fotos/img/".$campo[2];
					echo("	<td>
							<img src='".$img."' height='480' />
							</td>");
		}

?>
</tr>
</table>
</body>
</html>