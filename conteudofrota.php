<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Frota</title>

</head>


<body>

<table width='50%' border='0' cellspacing='0' cellpadding='0' align="center">

  <tr>
    <td align='center' valign='middle'>
    <table width='100%' border='0' cellspacing='0' cellpadding='0'>
      <tr>
        <td align='center' valign='middle'>
        <table width='60%' border='0' cellspacing='5' cellpadding='0'>
          <tr>

			<?php
				$x=1;
				$cd=$_GET["cd"];
				include_once("conectar.php");
					$sql= MYSQL_QUERY("select * from fotos where cat='frota' and id='".$cd."'") or die(mysql_error());
					while ($campo = mysql_fetch_row($sql)){	
						$img="../fotos/img/".$campo[2];
						echo("<td align='center' valign='middle' colspan='2'><a target='img' href='img.php?cd=".$campo[0]."'><img src='".$img."' height=80 /></a></td>");
						if ($x=1)
						{
							$link="img.php?cd=".$campo[0];
							$x=$x+1;
						}
						 }			
			?>
           
          </tr>
        </table>
        </td>
      </tr>
      <tr>
        <td align='center' valign='middle' height='20'><img src='img/barra3.jpg' width='80%' height='1' /></td>
      </tr>
      <tr>
        <td align='center' valign='middle' height='500'>
			<iframe width='700' height='500' src="<?php echo"$link"; ?>" name='img' frameborder="0" align="middle" scrolling="no">Escolha uma foto para visualizar.</iframe>
        </td>
      </tr>
    </table>
	</td>
  </tr>
  <tr>
    <td align='center' valign='middle' height="20">
    <img src='img/barra3.jpg' width='90%' height='1' />
    </td>
  </tr>
  <tr>
    <td align='center' valign='middle'>
    <table width="80%" border="0" cellspacing="0" cellpadding="0">

  <tr>
    <td valign="middle">
<?php
		$sql= MYSQL_QUERY("select * from frota where cd='".$cd."'") or die(mysql_error());
		while ($campo = mysql_fetch_row($sql))
				{	
						$n=		$campo[2];
						$ma=	$campo[3];
						$mo=	$campo[4];
						$a=		$campo[5];
						$l=		$campo[6];
						$i1=	$campo[7];
						$i2=	$campo[8];

					echo("<table width='90%' border='0' cellspacing='0' cellpadding='0'>
						  <tr>
							<td align='left' valign='middle'>N&ordm;".$n."</td>
						  </tr>
						  <tr>
							<td align='left' valign='middle'>Marca&nbsp;".$ma."</td>
						  </tr>
						  <tr>
							<td align='left' valign='middle'>Modelo&nbsp;".$mo."</td>
						  </tr>
						  <tr>
							<td align='left' valign='middle'>Ano&nbsp;".$a."</td>
						  </tr>
						  <tr>
							<td align='left' valign='middle'>".$l."&nbsp;Lugares</td>
						  </tr>
						  <tr>
							<td align='left' valign='middle'>".$i1."</td>
						  </tr>
						  <tr>
							<td align='left' valign='middle'>".$i2."</td>
						  </tr>
						</table>");
				}
?>
</td>
  </tr>
</table>

    </td>
  </tr>
</table>



</body>
</html>
