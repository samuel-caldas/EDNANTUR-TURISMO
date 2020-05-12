<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>img</title>
</head>

<body>
<p>Selecione o arquivo de imagem:</p>
<form action="upload.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
<input name="cd" type="hidden" value="<?php echo $_GET["cd"]; ?>" />
<input name="categoria" type="hidden" value="<?php echo $_GET["categoria"]; ?>" />
    <p>
      <input name="foto" type="file" size="50"/>
    </p>
    <p>
        <input type="button" name="Button" id="button" value="Voltar" onclick="javascript:history.back()"/>
        <input type="submit" name="button" id="button" value="OK" />

    </p>
</form>
<p>&nbsp;</p>
</body>
</html>