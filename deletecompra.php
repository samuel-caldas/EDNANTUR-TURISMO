<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Viagem de Compras</title>
</head>
<body>
<p><img src="img/load.gif" alt="" width="400" height="400" align="absmiddle" /></p>
<?php
include("conectar.php");
$cd = $_GET["cd"];
$sql = "DELETE FROM compra WHERE cd=" . $cd;
MYSQL_QUERY($sql) or die(myErro("<h1><strong>Falha na Conexão com o Banco de Dados</strong></h1>"));
?>
<script>  
history.back();  
</script> 
</body>
</html>