<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contato</title>
</head>
<body>
<p><img src="img/load.gif" alt="" width="400" height="400" align="absmiddle" /></p>
<p>
  <?php
include("conectar.php");
$cd=$_GET["cd"];
$sql="DELETE FROM contato WHERE cd=".$cd;
MYSQL_QUERY($sql) or die(mysql_error());
?>
<script>  
history.back(2);  
</script>
</p>
</body>
</html>