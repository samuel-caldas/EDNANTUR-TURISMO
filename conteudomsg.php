<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.arial {
  font-family: Arial, Helvetica, sans-serif;
}
-->
</style>
</head>

<body>
<meta http-equiv="refresh" content="30" />

<table width="100%" border="1" cellspacing="1" cellpadding="1">
  <tr class="arial">
    <td width="5%" align="left" valign="middle" bgcolor="#FFCC00"><strong>Cod</strong></td>
    <td width="20%" align="left" valign="middle" bgcolor="#CCCCCC"><strong>Motivo</strong></td>
    <td width="63%" align="left" valign="middle" bgcolor="#CCCCCC"><strong>Nome</strong></td>
    <td width="10%" align="center" valign="middle" bgcolor="#CCCCCC"><strong>Lido</strong></td>
    <td width="5%" align="center" valign="middle" bgcolor="#FF0000"><strong>Excluir</strong></td>
  </tr>
<?php
include("conectar.php");
$sql = MYSQL_QUERY("select * from contato") or die(mysql_error());
while ($campo = mysql_fetch_row($sql)) {
  if ($campo[9] = "s") {
    $color = "bordercolorlight='#00CC33' bgcolor='#B9FFDC'";
  } else {
    $color = "bordercolorlight='#FF6600' bgcolor='#F9EAD9'";
  }
  echo "
  <tr " . $color . ">
  	<td>" . $campo[0] . "</td>
    <td>" . $campo[1] . "</td>
    <td>" . $campo[2] . "</td>
	<td>" . $campo[7] . "</td>
    <td align='center' valign='middle'><a href='delete.php?cd=" . $campo[0] . "'><img src='img/delete.png' width='17' height='20' /></a></td>
  </tr>
";
}
?>
</table>

</body>
</html>