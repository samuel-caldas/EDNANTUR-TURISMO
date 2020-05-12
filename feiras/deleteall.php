<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>delete</title>
</head>

<body>
<p><img src="load.gif" width="138" height="25" align="middle" />
</p>
<p>
  <?php
include("conectar.php");
			$cd=$_GET["cd"];
			$sql="DELETE FROM feira WHERE cd='".$cd."'";
			MYSQL_QUERY($sql) or die(mysql_error());

?>
  
</p>
<script>
history.back(2);
</script>

</body>
</html>