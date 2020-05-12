<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>conteudopacotes</title>
</head>
<body>
<ul type="none">
<!-- --------------------------------------------------------------------------------------------------------- -->			
<?php
$cd=$_GET["cd"];
	include_once("conectar.php");

		$sql= MYSQL_QUERY("select * from pacotes where cd ='".$cd."'") or die(mysql_error());
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
			$dsaida=$campo[3];
			$hsaida=$campo[4];
			$dretorno=$campo[5];
			$hretorno=$campo[6];
			$local=$campo[7];
			$pacote=$campo[8];
			$valor=$campo[9];
			$pagamento=$campo[10];
			$roteiro=$campo[11];
			
echo("
<table width='100%' border='0' cellspacing='0' cellpadding='0'>
  <tr>
    <td width='49%' align='center' valign='middle'>
    <table width='50%' border='0' cellspacing='0' cellpadding='0'>
      <tr>
        <td width='40%' align='left' valign='middle'><font face='Arial, Helvetica, sans-serif'><strong>Saída: </strong></font></td>
        <td width='60%' align='left' valign='middle'><font face='Arial, Helvetica, sans-serif'>".$dsaida."</font></td>
      </tr>
      <tr>
        <td align='left' valign='middle'><font face='Arial, Helvetica, sans-serif'>Horário de Saída: </font></td>
        <td align='left' valign='middle'><font face='Arial, Helvetica, sans-serif'>".$hsaida."</font></td>
      </tr>
      <tr>
        <td height='20%' colspan='2' align='left' valign='middle'><img src='img/barra3.jpg' width='90%' height='1' /></td>
      </tr>
      <tr>
        <td align='left' valign='middle'><font face='Arial, Helvetica, sans-serif'><strong>Retorno: </strong></font></td>
        <td align='left' valign='middle'><font face='Arial, Helvetica, sans-serif'>".$dretorno."</font></td>
      </tr>
      <tr>
        <td align='left' valign='middle'><font face='Arial, Helvetica, sans-serif'>Horário de Retorno: </font></td>
        <td align='left' valign='middle'><font face='Arial, Helvetica, sans-serif'>".$hretorno."</font></td>
      </tr>
      <tr>
        <td colspan='2' align='left' height='20%' valign='middle'><img src='img/barra3.jpg' width='90%' height='1' /></td>
      </tr>
      <tr>
        <td colspan='2' align='left' valign='middle'><font face='Arial, Helvetica, sans-serif'><strong>Local de embarque: </strong></font></td>
      </tr>
      <tr>
        <td colspan='2' align='left' valign='middle'><font face='Arial, Helvetica, sans-serif'>".$local."</font></td>
      </tr>
      <tr>
        <td colspan='2' align='left' valign='middle'><img src='img/barra3.jpg' width='90%' height='1' /></td>
      </tr>
      <tr>
        <td colspan='2' align='left' valign='middle'><font face='Arial, Helvetica, sans-serif'><strong>Incluso no pacote: </strong></font></td>
      </tr>
      <tr>
        <td colspan='2' align='left' valign='middle'><font face='Arial, Helvetica, sans-serif'>".$pacote."</font></td>
      </tr>
      <tr>
        <td colspan='2' align='left' valign='middle'><img src='img/barra3.jpg' width='90%' height='1' /></td>
      </tr>
      <tr>
        <td colspan='2' align='left' valign='middle'><font face='Arial, Helvetica, sans-serif'><strong>Condições Comerciais: </strong></font></td>
      </tr>
      <tr>
        <td align='left' valign='middle'><font face='Arial, Helvetica, sans-serif' color='#003366'><strong><em>Valor: </em></strong></font></td>
        <td align='left' valign='middle'><font face='Arial, Helvetica, sans-serif'>".$valor."R$</font></td>
      </tr>
      <tr>
        <td colspan='2' align='left' valign='middle'><font face='Arial, Helvetica, sans-serif' color='#003366'><strong><em>Formas de pagamento:</em></strong></font></td>
      </tr>
      <tr>
        <td colspan='2' align='left' valign='middle'><font face='Arial, Helvetica, sans-serif'>".$pagamento."</font></td>
      </tr>
    </table></td>
    <td width='2%' align='center' valign='middle'><img src='img/barra4.jpg' height='90%' width='1' /></td>
    <td width='49%' align='center' valign='middle'><table width='100%' border='0' cellspacing='0' cellpadding='0'>
      <tr>
        <td align='center' valign='middle'><img src='".$img."' height='200' /></td>
      </tr>
      <tr>
        <td align='left' valign='middle'><font face='Arial, Helvetica, sans-serif'><strong>Roteiro: </strong></font></td>
      </tr>
      <tr>
        <td align='left' valign='middle'><font face='Arial, Helvetica, sans-serif'>".$roteiro."</font></td>
      </tr>
    </table></td>
  </tr>
</table>
");
 }                               

		
?>


<!-- ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->			



</ul>
</body>
</html>