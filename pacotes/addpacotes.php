<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>conteudopacotes</title>

<?php 
include ("plugins.php");
start("word| |");
?>
<style type="text/css">
.ab {
	font-family: Arial, Helvetica, sans-serif;
	color: #FFF;
}
</style></head>

<body>

<form action="add.php" method="get" enctype="application/x-www-form-urlencoded">

<!-- ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->			


<table width='100%' border='0' cellspacing='0' cellpadding='0'>
  <tr>
    <td width='49%' align='center' valign='middle'>
    <table width='50%' border='0' cellspacing='0' cellpadding='0'>
      <tr>
      <td width="50%" align="left" valign="middle" class="ab"><span class="ab">
      Título:
        <input name="titulo" type="text" id="titulo" size="50" />
        </span></td>
      </tr>
      <tr>
        <td align='left' valign='middle'>
          <span class="ab">
          <strong>Saída: </strong>
          <input name="ds" type="text" id="ds" size="50" />
          </span></td>
        </tr>
      <tr>
        <td align='left' valign='middle'>
          <span class="ab">Horário de Saída:
        <input name="hs" type="text" id="hs" size="50" />
          </span></td>
        </tr>
      <tr>
        <td height='20%' align='left' valign='middle'>
          <span class="ab"><img src='img/barra3.jpg' width='90%' height='1' />
          </span></td>
      </tr>
      <tr>
        <td align='left' valign='middle'>
          <span class="ab"><strong>Retorno: </strong>
        <input name="dr" type="text" id="dr" size="50" />
          </span></td>
        </tr>
      <tr>
        <td align='left' valign='middle'>
          <span class="ab">Horário de Retorno: 
        <input name="hr" type="text" id="hr" size="50" />
          </span></td>
        </tr>
      <tr>
        <td align='left' height='20%' valign='middle'>
          <span class="ab"><img src='img/barra3.jpg' width='90%' height='1' /></span></td>
      </tr>
      <tr>
        <td align='left' valign='middle'><span class="ab"><strong>Local de embarque: 
          <input name="local" type="text" id="local" value="" size="50" />
        </strong></span></td>
        </tr>
      <tr>
        <td align='left' valign='middle'>&nbsp;</td>
        </tr>
      <tr>
        <td align='left' valign='middle'><span class="ab"><img src='img/barra3.jpg' width='90%' height='1' /></span></td>
      </tr>
      <tr>
        <td align='left' valign='middle'><span class="ab"><strong>Incluso no pacote: </strong></span></td>
        </tr>
      <tr>
        <td align='left' valign='middle'><span class="ab">
          <textarea name="pac" cols="80" rows="20" id="pac"></textarea>
        </span></td>
      </tr>
      <tr>
        <td align='left' valign='middle'><span class="ab"><img src='img/barra3.jpg' width='90%' height='1' /></span></td>
      </tr>
      <tr>
        <td align='left' valign='middle'><span class="ab"><strong>Condições Comerciais: </strong></span></td>
      </tr>
      <tr>
        <td align='left' valign='middle'><span class="ab"><strong><em>Valor: &nbsp; </em></strong>
          <input name="val" type="text" id="val" size="40" />
          R$</span></td>
        </tr>
      <tr>
        <td align='left' valign='middle'><span class="ab"><strong><em>Formas de pagamento:</em></strong></span></td>
        </tr>
      <tr>
        <td align='left' valign='middle'><span class="ab">
          <textarea name="pag" cols="80" rows="20" id="pag"></textarea>
        </span></td>
        </tr>
      <tr>
        <td align='left' valign='middle'><span class="ab"><strong>Roteiro: </strong></span></td>
        </tr>
      <tr>
        <td align='left' valign='middle'><span class="ab">
          <textarea name="rot" cols="80" rows="20" id="rot"></textarea>
        </span></td>
        </tr>
       <tr>
         <td align='center' valign='middle'>
           <span class="ab">
<input name="Enviar" type="submit" id="Enviar" value="Enviar" />
&nbsp;            
<input name="input" type="reset" value="Limpar" />           
           </span></td>
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