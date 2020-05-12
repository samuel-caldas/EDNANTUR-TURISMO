<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>add</title>
</head>
<body>
<p><img src="load.gif" width="400" height="400" align="middle" /></p>
<p>
  <?php
				include("conectar.php");
				$n=$_GET["n"];
				$ma=$_GET["ma"];
				$mo=$_GET["mo"];
				$a=$_GET["a"];
				$l=$_GET["l"];
				$i=$_GET["i"];
				$e=$_GET["e"];
				$inserir="INSERT INTO frota ( n, ma, mo, a, l, i, esp)VALUES('".$n."', '".$ma."', '".$mo."', '".$a."', '".$l."', '".$i."','".$e."')";
				$resultado= mysql_query($inserir) or die ("falha na inserção dos dados!");
				echo ("dados inseridos com sucesso!");

?>
</p>

<script>
setTimeout(history.go(-2),1250);
</script>
</body>
</html>