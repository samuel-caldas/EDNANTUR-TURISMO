<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>add</title>
</head>
<body>
<p><img src="load.gif" height="400" align="middle" /></p>
<p>
  <?php
				include("conectar.php");
				$ti=$_GET["titulo"];
				$ds=$_GET["ds"];
				$hs=$_GET["hs"];
				$de=$_GET["dr"];
				$hr=$_GET["hr"];
				$local=$_GET["local"];
				$pac=$_GET["pac"];
				$val=$_GET["val"];
				$pag=$_GET["pag"];
				$rot=$_GET["rot"];
				$inserir="INSERT INTO feira ( titulo, ds, hs, dr, hr, local, pac, val, pag, rot)VALUES('".$ti."', '".$ds."', '".$hs."', '".$dr."', '".$hr."', '".$local."', '".$pac."', '".$val."', '".$pag."', '".$rot."')";
				$resultado= mysql_query($inserir) or die ("falha na inserção dos dados!");
				echo ("dados inseridos com sucesso!");

?>
</p>

<meta HTTP-EQUIV="REFRESH" CONTENT="2; URL=javascript:window.open('feiras.php','_parent');">
</body>
</html>