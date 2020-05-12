	<?php
		require_once("conectar.php");
		$l = $_POST["login"];
		$s = $_POST["senha"];
		$consulta=("select * from login where n='".$l."' and s='".$s."'");
		$result = mysql_query($consulta);
		$campo = mysql_Fetch_array($result);
		$num_linhas = mysql_num_rows($result);
		$GLOBALS["linhas"] = $num_linhas;
		if($num_linhas==1)
			{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Painel de controle</title>
<link href="estilo.css" rel="stylesheet" type="text/css" />
</head>

<body alink="#999999" link="#999999" vlink="#999999" text="#333333">
<table width="100%"  border="0" cellspacing="0" cellpadding="0" background="imagens/bgplano.png">
  <tr>
	<td colspan="3">
   	  <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr class="top">
            <td align="center" valign="middle" width="5%">&nbsp;</td>
            <td align="center" valign="middle" width="15%">
            <a href="clientes.php" target="cont" class="lateral"><font color="#FFFFFF"><strong>Clientes</strong></font>
            </a>
            </td>
            <td align="center" valign="middle" width="15%">
            <a href="msg.php" title="msg" target="cont"><font color="#FFFFFF"><strong>Mensagens</strong></font>
            <img src="img/texteditor.png" width="25" height="28"  align="absmiddle" border="0" />
            </a>
            </td>
            <td align="center" valign="middle" width="15%">
            <a href="pacotes/pacotes.php" target="cont"><font color="#FFFFFF"><strong>Pacotes turisticos</strong></font>
            </a>
            </td>
            <td width="15%" align="center" valign="middle">
            <a href="frota/frota.php" target="cont"><font color="#FFFFFF"><strong>Carros</strong></font>
            </a>
            </td>
            <td align="center" valign="middle"><font color="#666666"><strong>|</strong></font></td>
            <td width="10%" align="center" valign="middle"><a href="<?php echo ("deletar.php?l=".$l."&s=".$s); ?>" class="top"><font color="#FFFFFF">Deletar ID</font></a></td>
            <td width="10%" align="center" valign="middle"><a href="novo.php" target="cont" class="top"><font color="#FFFFFF">Criar ID</font></a></td>
            <td width="10%" align="center" valign="middle"><a href="login.php" class="top"><font color="#FFFFFF">Sair</font></a></td>
        </tr>
      </table>

    </td>
  </tr>
  <tr>
    <td colspan="4" align="center" valign="top">
    <table width="100%" height="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="1000" align="center" valign="top">
          <iframe width="95%" height="1000" src="msg.php" name="cont"scrolling="auto" frameborder="0"></iframe>
          </td>
        </tr>
    </table>
    
    </td>
  </tr>
</table>

</body>
</html>
<?php
	}
	else
	{
?>


<table width="100%" heith="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#999999">
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td width="20%" align="left">&nbsp;</td>
    <td width="60%" height="100%" align="center" valign="middle"><h3><strong><font color="#FFFFFF">Nome ou Senha incorreto.</font></strong></h3></td>
    <td width="20%" align="right">&nbsp;</td>
  </tr>
</table>

<?php
	};
?>