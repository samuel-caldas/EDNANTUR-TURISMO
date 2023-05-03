<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Fretamento de ônibus</title>
</head>
<body bgcolor="#FFFFFF">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="76" colspan="2" align="left" valign="middle">&nbsp;         &nbsp;	<img src="img/FRETAMENTO%20ONIBUS.png" width="438" height="60" /></td>
  </tr>
  <tr>
    <td width="50%" align="center" valign="middle"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="left" valign="middle"><p>Oferecemos a você uma moderna frota de ônibus, com diversos modelos,  atendendo a sua necessidade, seja ela viagens à passeio, trabalho ou eventos. <br />
Para solicitar um orçamento, preencha o formulário ou entre em contato com  nosso setor de fretamentos.</p></td>
      </tr>
      <tr>
        <td align="center" valign="middle">&nbsp;</td>
      </tr>
      <tr>
        <td align="center" valign="middle"><img src="img/onibusfretamento.png" width="440" height="218" /></td>
      </tr>
    </table>
    </td>
    <td width="60%" align="center" valign="middle">
  <form action="controle.php" method="get" enctype="application/x-www-form-urlencoded" name="frete">
    <input name="tipo" type="hidden" value="frete" align="middle" />
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
        <td colspan="2" align="center" valign="middle" class="title">Preencha o formulário abaixo para orçar conosco:</td>
        </tr>
        <tr>
          <td width="50%" align="right" valign="middle"><strong>
          Tipos de orçamento: &nbsp;
          </strong></td>
          <td width="50%" align="left" valign="middle">
            <strong>
            <select name="a" size="1" id="a">
              <option value="Passeios Turisticos" selected="selected">Passeios Turisticos</option>
              <option value="Passeios Escolares">Passeios Escolares</option>
              <option value="Transporte de Funcionários">Transporte de Funcionários</option>
            </select>
          </strong>
          </td>
        </tr>
        <tr>
          <td align="right" valign="middle"><strong>
          Carro: &nbsp;
          </strong></td>
          <td align="left" valign="middle">
            <strong>
            <select name="b" id="b">
              <option value="14320">Nº14320 </option>
              <option value="15320">Nº15320 </option>
              <option value="10320">Nº10320 </option>
              <option value="5320">Nº5320 </option>
              <option value="9320">Nº9320 </option>
              <option value="1330">Nº1330 </option>
              <option value="13320">Nº13320 </option>
              <option value="12320">Nº12320 </option>
              <option value="16320">Nº16320 </option>
              <option value="8320">Nº8320 </option>
            </select>
          </strong></td>
        </tr>
        <tr>
          <td align="right" valign="middle"><strong>
          Nome: &nbsp;
          </strong></td>
        <td align="left" valign="middle"><strong>
        <input type="text" name="c"/>
        </strong></td>
        </tr>
        <tr>
          <td align="right" valign="middle"><strong>
          Fone: &nbsp;
          </strong></td>
        <td align="left" valign="middle"><strong>
        <input type="text" name="d"/>
        </strong></td>
        </tr>
        <tr>
          <td align="right" valign="middle"><strong>
          E-mail: &nbsp;
          </strong></td>
        <td align="left" valign="middle"><strong>
        <input type="text" name="e"/>
        </strong></td>
        </tr>
        <tr>
          <td align="right" valign="middle"><strong>
          Data de saída: &nbsp;
          </strong></td>
        <td align="left" valign="middle"><strong>
        <input type="text" name="f"/>
        </strong></td>
        </tr>
        <tr>
          <td align="right" valign="middle"><strong>
          Data de retorno: &nbsp;
          </strong></td>
        <td align="left" valign="middle"><strong>
        <input type="text" name="g"/>
        </strong></td>
        </tr>
        <tr>
          <td align="right" valign="middle"><strong>
          Observações: &nbsp;
          </strong></td>
        <td align="left" valign="middle"><strong>
          <textarea name="h" rows="5"></textarea>
        </strong></td>
        </tr>
        <tr>
          <td align="right" valign="middle">&nbsp;</td>
        <td align="left" valign="middle"><strong>
          <label>
            <input type="submit" name="Enviar" id="Enviar" value="Enviar" />
          </label>
        </strong></td>
        </tr>
      </table>
</form>
    </td>
  </tr>
</table>
</body>
</html>