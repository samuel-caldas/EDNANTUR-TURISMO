<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<meta http-equiv="refresh" content="30" />

<table width="100%" border="1" cellspacing="1" cellpadding="1" align="center">
  <tr>
    <font face="Arial, Helvetica, sans-serif">
    <td width="5%" align="center" valign="middle" bgcolor="#FFCC00"><strong>Cod</strong></td>
    <td width="10%" align="center" valign="middle" bgcolor="#CCCCCC"><strong>Motivo</strong></td>
    <td width="10%" align="center" valign="middle" bgcolor="#CCCCCC"><strong>Nome</strong></td>
    <td width="10%" align="center" valign="middle" bgcolor="#CCCCCC"><strong>RG</strong></td>
    <td width="10%" align="center" valign="middle" bgcolor="#CCCCCC"><strong>Fone</strong></td>
    <td width="10%" align="center" valign="middle" bgcolor="#CCCCCC"><strong>E-mail</strong></td>
    <td align="center" valign="middle" bgcolor="#CCCCCC"><strong>Obs</strong></td>
    <td width="5%" align="center" valign="middle" bgcolor="#CCCCCC"><strong>Lido</strong></td>
    <td width="5%" align="center" valign="middle" bgcolor="#CCCCCC"><strong>Tipo</strong></td></font>
    
  
  </tr>
<?php
include("conectar.php");
$sql = MYSQL_QUERY("select * from orcamento where cd=" . $_GET["cd"]) or die(mysql_error());
while ($campo = mysql_fetch_row($sql)) {

  $resultado = mysql_query("UPDATE  orcamento SET  lido= 's' WHERE  cd=" . $campo[0]) or die("falha na inserção dos dados!");
  echo "

  <tr>
  	<td bgcolor='#FFCC00'>" . $campo[0] . "</td>
    <td>" . $campo[1] . "</td>
    <td>" . $campo[2] . "</td>
	<td>" . $campo[3] . "</td>
	<td>" . $campo[4] . "</td>
	<td>" . $campo[5] . "</td>
	<td>" . $campo[6] . "</td>
	<td>" . $campo[7] . "</td>
	<td>" . $campo[8] . "</td>
  </tr>
";
}
?>
<tr>
<td colspan="9" align="left" valign="middle">
  <a href="javascript:history.back(1)"><strong>Voltar</strong></a></td>
</tr>
</table>

</body>
</html>