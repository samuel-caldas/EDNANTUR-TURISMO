<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>conteudopacotes</title>
<style type="text/css">
<!--
.ab {font-family: Arial, Helvetica, sans-serif;font-weight: bold;}
-->
</style>
</head>
<body>
<form action="add.php" method="get" enctype="application/x-www-form-urlencoded">
<table width='100%' border='0' cellspacing='0' cellpadding='0'>
  <tr>
    <td width='49%' align='center' valign='middle'><table width='50%' border='0' cellspacing='0' cellpadding='0'>
      <tr>
      <td class="ab">Título: 
        <label>
          <input name="titulo" type="text" id="titulo" size="50" />
        </label></td>
      <td class="ab">&nbsp;</td>
      </tr>
      <tr>
        <td align='left' valign='middle'><font face='Arial, Helvetica, sans-serif'><strong>Saída: </strong></font>
          <input name="ds" type="text" id="ds" size="50" />        </td>
        <td align='left' valign='middle'>&nbsp;</td>
        </tr>
      <tr>
        <td align='left' valign='middle'><font face='Arial, Helvetica, sans-serif'>Horário de Saída: </font>          <input name="hs" type="text" id="hs" size="50" /></td>
        <td align='left' valign='middle'>&nbsp;</td>
        </tr>
      <tr>
        <td height='20%' colspan='2' align='left' valign='middle'><img src='img/barra3.jpg' width='90%' height='1' /></td>
      </tr>
      <tr>
        <td align='left' valign='middle'><font face='Arial, Helvetica, sans-serif'><strong>Retorno: </strong></font>          <input name="dr" type="text" id="dr" size="50" /></td>
        <td align='left' valign='middle'>&nbsp;</td>
        </tr>
      <tr>
        <td align='left' valign='middle'><font face='Arial, Helvetica, sans-serif'>Horário de Retorno: </font>          <input name="hr" type="text" id="hr" size="50" /></td>
        <td align='left' valign='middle'>&nbsp;</td>
        </tr>
      <tr>
        <td colspan='2' align='left' height='20%' valign='middle'><img src='img/barra3.jpg' width='90%' height='1' /></td>
      </tr>
      <tr>
        <td align='left' valign='middle'><font face='Arial, Helvetica, sans-serif'><strong>Local de embarque: 
          <input name="local" type="text" id="local" value="" size="50" />
        </strong></font></td>
        <td align='left' valign='middle'>&nbsp;</td>
      </tr>
      <tr>
        <td align='left' valign='middle'>&nbsp;</td>
        <td align='left' valign='middle'>&nbsp;</td>
      </tr>
      <tr>
        <td colspan='2' align='left' valign='middle'><img src='img/barra3.jpg' width='90%' height='1' /></td>
      </tr>
      <tr>
        <td align='left' valign='middle'><font face='Arial, Helvetica, sans-serif'><strong>Incluso no pacote: </strong></font></td>
        <td align='left' valign='middle'>&nbsp;</td>
      </tr>
      <tr>
        <td colspan='2' align='left' valign='middle'><textarea name="pac" cols="50" rows="10" id="pac"></textarea></td>
      </tr>
      <tr>
        <td colspan='2' align='left' valign='middle'><img src='img/barra3.jpg' width='90%' height='1' /></td>
      </tr>
      <tr>
        <td colspan='2' align='left' valign='middle'><font face='Arial, Helvetica, sans-serif'><strong>Condições Comerciais: </strong></font></td>
      </tr>
      <tr>
        <td colspan="2" align='left' valign='middle'><font face='Arial, Helvetica, sans-serif' color='#003366'><strong><em>Valor: &nbsp; </em></strong></font><font face='Arial, Helvetica, sans-serif'>
          <input name="val" type="text" id="val" size="40" />
          R$</font></td>
        </tr>
      <tr>
        <td width="50%" align='left' valign='middle'><font face='Arial, Helvetica, sans-serif' color='#003366'><strong><em>Formas de pagamento:</em></strong></font></td>
        <td width="50%" align='left' valign='middle'><font face='Arial, Helvetica, sans-serif'><strong>Roteiro: </strong></font></td>
      </tr>
      <tr>
        <td align='left' valign='middle'><textarea name="pag" cols="50" rows="10" id="pag"></textarea></td>
        <td align='left' valign='middle'><textarea name="rot" cols="50" rows="10" id="rot"></textarea></td>
      </tr>
       <tr>
         <td colspan='2' align='center' valign='middle'><span class="ab">
           <input name="Enviar" type="submit" id="Enviar" value="Enviar" />
           &nbsp; 
            <input name="input" type="reset" value="Limpar" />
           </span>           </td>
       </tr>
       </table>
    </td>
  </table>
    </td>
  </tr>
</table>
<!-- ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->			
</form>



</body>
</html>