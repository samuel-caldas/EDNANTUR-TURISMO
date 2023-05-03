<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CPainel - Login</title>

<link href="estilo.css" rel="stylesheet" type="text/css" />
<noscript>
JS desativado.
</noscript>
<script language="JavaScript">
  function logo(imagem,x,y)
    {
        var larguraimg = document.getElementById(imagem).width;
        var alturaimg = document.getElementById(imagem).height;
        var larguratela = window.innerWidth;
        var alturatela = window.innerHeight;
        var largura = ((larguratela-larguraimg)/x)-1;
        var altura= ((alturatela-alturaimg)/y)-1;
        document.getElementById(imagem).vspace=altura;
        document.getElementById(imagem).hspace=largura;
    };
</script>
</head>
<body style="" onload="logo('cpainel',2,2);" onresize="logo('cpainel',2,2);">
<div id="topbar">
<div id="midle">
<table width="100%" border="0">
  <tr>
    <td style="height:8px;"></td>
  </tr>
  <tr>
    <td align="right">
    <form action="painel.php" method="POST" class="texto">
    &nbsp; Nome:&nbsp; <input type="text" name="login" class="estilotextarea4"/>
    &nbsp; Senha:&nbsp; <input name="senha" type="password" maxlength="8" class="estilotextarea4" />      
    <input name="button" type="submit" class="txt" id="button" value="Enviar" />&nbsp;&nbsp;&nbsp;&nbsp;
    </form>
    </td>
  </tr>
  <tr>
    <td style="height:8px;">&nbsp;</td>
  </tr>
</table>
</div>
</div>
<img src="imagens/logo.gif" id="cpainel" />
</body>
</html>