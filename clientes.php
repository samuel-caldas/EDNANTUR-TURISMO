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
.arial .arial {
	font-weight: bold;
	color: #000;
}
-->
</style>
</head>
<body>
<table width="100%" border="1" cellspacing="1" cellpadding="1">
  <tr>
	<td width="5%" bgcolor="#FFCC00" class="arial"><strong>&nbsp; Cod</strong></td>
	<td width="10%" bgcolor="#DBDBDB" class="arial"><strong>&nbsp;  Interesse</strong></td>
	<td bgcolor="#DBDBDB"><span class="arial"><strong>&nbsp;  Nome</strong></span></td>
	<td width="10%" bgcolor="#DBDBDB"><span class="arial"><strong>&nbsp;  R.G.</strong></span></td>
	<td width="10%" bgcolor="#DBDBDB"><span class="arial"><strong>&nbsp;  Fone</strong></span></td>
	<td width="15%" bgcolor="#DBDBDB"><span class="arial"><strong>&nbsp; Email</strong></span></td>
	<td bgcolor="#DBDBDB"><span class="arial"><strong>&nbsp; Obs.</strong></span></td>
  </tr>

<?php
include_once("conectar.php");
$camp = MYSQL_QUERY("select * from clientes order by n") or die(mysql_error());
while ($cliente = mysql_fetch_row($camp)) {
	echo
		("<tr>
				<td>" . $cliente[0] . "</td>
				<td>" . $cliente[1] . "</td>
				<td>" . $cliente[2] . "</td>
				<td>" . $cliente[3] . "</td>
				<td>" . $cliente[4] . "</td>
				<td>" . $cliente[5] . "</td>
				<td>" . $cliente[6] . "</td>
			  </tr>");
}
?>
</table>
</body>
</html>