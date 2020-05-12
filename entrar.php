<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cadastre-se</title>
<link rel="stylesheet" href="css/screen.css" media="screen" />
<style type="text/css">
<!--
.arial{font-family:Arial, Helvetica, sans-serif;font-weight:700}.arial strong{font-family:Arial, Helvetica, sans-serif}
-->
</style>
</head>

<body bgcolor="#FFFFFF" link="#FFFFFF" alink="#FFFFFF" vlink="#FFFFFF" text="#000000">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="48%" align="center" valign="top">
    <form action="controle.php" method="get" name="cadastro" target="ifr">
    <input name="tipo" type="hidden" id="tipo" value="Cadastro" />
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="70" colspan="2" align="center" valign="middle"><img src="img/cadastre-se.png" width="206" height="34" /></td>
        </tr>
      <tr>
        <td colspan="2" align="center" valign="middle"><strong>Preencha o formulário abaixo e viage com a gente.</strong></td>
        </tr>
      <tr>
        <td width="50%" align="right" valign="middle" class="arial"><strong>Interesse: &nbsp;</strong></td>
        <td width="50%" align="left" valign="middle" class="arial"><select name="i" id="i" style="font-family:Arial, Helvetica, sans-serif; width:200px">
          <option value="Viagem para Compras">VIAGEM PARA COMPRAS</option>
          <option value="Receber Novidades">RECEBER NOVIDADES</option>
        </select></td>
        </tr>
      <tr>
        <td align="right" valign="middle"><strong>Nome Completo: &nbsp;</strong></td>
        <td align="left" valign="middle"><input name="nome" type="text" id="nome" style="width:200px" onfocus="cleanit(this);refresh_nu()" /></td>
        </tr>
      <tr>
        <td align="right" valign="middle" class="arial"><strong>R.G.: &nbsp;</strong></td>
        <td align="left" valign="middle" class="arial"><input name="rg" type="text" id="rg" style="width:200px" onfocus="cleanit(this);refresh_nu()" /></td>
        </tr>
      <tr>
        <td align="right" valign="middle" class="arial"><strong>Fone: &nbsp;</strong></td>
        <td align="left" valign="middle" class="arial"><input name="fone" type="text" id="fone" style="width:200px" onfocus="cleanit(this);refresh_nu()" /></td>
        </tr>
      <tr>
        <td align="right" valign="middle"><strong>E-mail: &nbsp;</strong></td>
        <td align="left" valign="middle"><input name="email" type="text" id="email" style="width:200px" onfocus="cleanit(this);refresh_nu()" /></td>
        </tr>
      <tr>
        <td align="right" valign="middle" class="arial"><strong>Observação: &nbsp;</strong></td>
        <td align="left" valign="middle" class="arial"><textarea name="obs" cols="25" rows="5"style="width:200px"></textarea></td>
        </tr>
      <tr>
        <td align="center" valign="middle" class="arial">&nbsp;</td>
        <td align="left" valign="middle" class="arial"><strong><strong>
          <input type="submit" name="enviar" id="button" value="Enviar" style="font-family:Arial, Helvetica, sans-serif; width:200px" />
        </strong></strong></td>
        </tr>
    </table>
    </form>
    </td>
    <td align="center" valign="top" width="5"><p align="justify"><img src="img/barra4.jpg" width="1" height="300%" /></p>
      </td>
    <td align="center" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
      <tr>
        <td align="left"><strong><span class="arial">Realizamos viagens de compras aos grandes centros atacadistas do Brasil, onde o melhor do mundo da moda acontece.
          </span> </strong>          <p align="justify" class="arial"><strong>Levamos você aos melhores lugares para suas compras.</strong></p></td>
      </tr>
      <tr>
        <td align="center" valign="middle">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="middle"><strong>São Paulo com saídas todos os <font color="#CC0000">DOMINGOS</font> e <font color="#CC0000" class="arial">QUARTAS-FEIRAS.</font></strong></td>
      </tr>
      <tr>
        <td valign="middle"><img src="img/barra3.jpg" width="90%" height="1" /></td>
      </tr>
      <tr>
        <td align="left" valign="middle" class="arial"><strong> Com saídas para Goiânia.</strong></td>
      </tr>
    </table></td>
  </tr>
</table>

</body>
</html>