<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home</title>
<link rel='stylesheet' href='css/1.css' type='text/css' /> 
        <link rel='stylesheet' href='css/2.css' type='text/css' /> 
        <link rel='stylesheet' href='css/3.css' type='text/css' /> 
        <script type='text/javascript' src='js/mootools-release-1.11.js'></script>
        <script type='text/javascript' src='js/jquery.js'></script>
        <script type='text/javascript' src='js/jquery.jcarousel.pack.js'></script>					
        <script type='text/javascript'> 
var YtSettings = { tplurl: '/templates/guacu', color: 'blue' };
var caminho =''; jQuery.noConflict();
    window.addEvent('domready', function() {
      SqueezeBox.initialize({});
      $$('a.modal').each(function(el) {
        el.addEvent('click', function(e) {
          new Event(e).stop();
          SqueezeBox.fromElement(el);
        });
      });
    });
window.addEvent('domready',function(){var Slider94 = new DJImageSlider({id: '94', slider_type: 0, slide_size: 240, visible_slides: 1, show_buttons: 0, show_arrows: 2, preload: 1000},{auto: 1, transition: Fx.Transitions.Expo.easeInOut, duration: 1000, delay: 4000})});
function mycarousel_initCallback(carousel)
      {
          // Disable autoscrolling if the user clicks the prev or next button.
          carousel.buttonNext.bind('click', function() {
            carousel.startAuto(0);
          });
        
          carousel.buttonPrev.bind('click', function() {
            carousel.startAuto(0);
        });			
          // Pause autoscrolling if the user moves with the cursor over the clip.
          carousel.clip.hover(function() {
            carousel.stopAuto();
          }, function() {
            carousel.startAuto();
          });
        };
        
        jQuery(document).ready(function() {
          jQuery('#mycarousel').jcarousel({
            auto: 3,
            scroll:1,
            wrap: 'last',
            animation: 'slow',
            initCallback: mycarousel_initCallback
          });
        });
        </script> 
        <script type='text/javascript'>/*<![CDATA[*/var ajax_live_site = 'http://guacutur.com.br/index.php';/*]]>*/</script>
                <script type='text/javascript' src='js/ajax.js'></script> 
        <script language='javascript' type='text/javascript'> 
var freq='always' ;
var autohide=['no', 10];
if (parseInt(freq)!=NaN);
var random_num=Math.floor(Math.random()*freq);
var ie=document.all;
var dom=document.getElementById;
var ns4=document.layers;
var calunits=document.layers? '' : 'px';
var bouncelimit='32';
var direction='up';
function initbox(){
 
if (!dom&&!ie&&!ns4)
 
return
 
crossobj=(dom)?document.getElementById('dropin').style : ie? document.all.dropin : document.dropin
 
scroll_top=(ie)? truebody().scrollTop : window.pageYOffset
 
crossobj.top=scroll_top-250+calunits
 
crossobj.visibility=(dom||ie)? 'visible' : 'show'
 
dropstart=setInterval('dropin()',50)
 
autoclose()
 
}
function dropin(){
 
scroll_top=(ie)? truebody().scrollTop : window.pageYOffset
 
if (parseInt(crossobj.top)			<100+scroll_top)
 
crossobj.top=parseInt(crossobj.top)+40+calunits
 
else{
 
clearInterval(dropstart);
bouncestart=setInterval('bouncein()',50);
autoclose();
}
}
 
 
 
function bouncein(){
 
crossobj.top=parseInt(crossobj.top)-bouncelimit+calunits
 
if (bouncelimit			<0)
 
bouncelimit+=8
 
bouncelimit=bouncelimit*-1
 
if (bouncelimit==0){
 
clearInterval(bouncestart)
 
autoclose()
 
}
 
}
 
 
 
function dismissbox(){
 
if (window.bouncestart) clearInterval(bouncestart)
 
crossobj.visibility='hidden'
 
}
 
 
 
function autoclose(){
 
if (autohide[0]=='yes'){
 
setTimeout('dismissbox()', autohide[1]*1000)
 
}
 
}
 
 
 
function dropwin(){
 
bouncelimit=32
 
direction='up'
 
initbox()
 
}
 
 
 
function truebody(){
 
return (document.compatMode && document.compatMode!='BackCompat')? document.documentElement : document.body
 
}
 
 
 
function get_cookie(Name) {
 
var search = Name + '='
 
var returnvalue = ''
 
if (document.cookie.length > 0) {
 
offset = document.cookie.indexOf(search)
 
if (offset != -1) {
 
offset += search.length
 
end = document.cookie.indexOf(';', offset)
 
if (end == -1)
 
end = document.cookie.length;
 
returnvalue=unescape(document.cookie.substring(offset, end))
 
}
 
}
 
return returnvalue;
 
}
 
 
 
if (freq=='oncepersession' && get_cookie('dropinmod')=='' || freq=='always' || parseInt(freq)!=NaN && random_num==0){
 
if (document.getElementById || document.all)
 
window.onload=initbox
 
 
 
if (freq=='oncepersession')
 
document.cookie='dropinmod=yes'
 
 
 
if (freq=='never')
 
initibox()
 
}
</script> 
<style type="text/css">
    *{
        margin:0;
        padding:0;
        font:bold 12px "Lucida Grande", Arial, sans-serif;
    }

    #status{

    width:100px
        outline:none;

    }
    .focusField{
        border:solid 2px #73A6FF;
        background:#EFF5FF;
        color:#000;
    }
    .idleField{
        background:#EEE;
        color: #6F6F6F;
        border: solid 2px #DFDFDF;
    }
#form5 table tr td h1 strong {
  font-family: "Arial Black", Gadget, sans-serif;
  color: #36689A;
  font-size: x-large;
  text-align: center;
  font-weight: bold;
}
#form5 table tr td p strong {
  text-align: center;
}
#form5 table tr td h1 strong {
  font-family: Arial, Helvetica, sans-serif;
}
#Orçar1 table tr td {
  color: #039;
  font-size: 25px;
}
.arial {
  font-family: Arial, Helvetica, sans-serif;
}
</style>
<link rel="stylesheet" href="css/screen.css" media="screen" />
<script src="js/swfobject_modified.js" type="text/javascript"></script>
</head>
<body bgcolor="#FFFFFF" link="#FFFFFF" alink="#FFFFFF" vlink="#FFFFFF" text="#000000">



<table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center" valign="middle">


<ul class='jcarousel-skin-tango' id='mycarousel' name="mycarousel">
                
<!-- -------------------------------------------------------------------------------------------------------------------------------- -->			
<?php
include_once("conectar.php");
$sql = MYSQL_QUERY("select * from pacotes order by ds") or die(mysql_error());
while ($campo = mysql_fetch_row($sql)) {
  $txt = $campo[1];
  $dsaida = $campo[3];
  $dretorno = $campo[5];
  $y = 1;
  $conteudo = "select * from fotos where cat='pacotes' and id='" . $campo[0] . "'";
  $consulta = MYSQL_QUERY($conteudo) or die(mysql_error());
  while ($imagem = mysql_fetch_row($consulta)) {
    if ($y = 1) {
      $img = "fotos/img/" . $imagem[2];
      $y = $y + 1;
    }
  }
  echo ("
					<li>
						<a href='pacotes.php?cod=" . $campo[0] . "'>
						<table border='0' cellspacing='0' cellpadding='0' >
						  <tr>
							<td align='center' valign='middle'><img width=180 height=120 src='" . $img . "' border='1'/></td>
						  </tr>
						  <tr>
							<td align='center' valign='middle'><div class='dados'><div class='title'><strong>" . $txt . "</strong></div></div></td>
						  </tr>
						  <tr>
							<td align='center' valign='middle'><div class='bgsaida'>" . $dsaida . "</div>	</td>
						  </tr>
						  <tr>
							<td align='center' valign='middle'><div class='bgretorno'>" . $dretorno . "</div></td>
						  </tr>
						</table>
						</a>
					</li>

						");
}


?>
</ul>
    </td>
  </tr>
  <tr>
    <td align="center">
    <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
      <tr>
        <td width="40%">

        <table width="100%"  border="0" cellspacing="0" cellpadding="0" align="center">
          <tr>
            <td align="center" valign="middle"></td>
          </tr>
          <tr>
            <td align="center" valign="middle"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="46%" align="right" valign="middle"><img src="img/crbst_icoAtendimento.png" width="48" height="52" /></td>
                <td width="54%" align="left" valign="middle"><iframe scrolling="no" src="msgr.html" width="115" height="50" frameborder="0"></iframe></td>
              </tr>
              <tr>
                <td colspan="2" align="center" valign="middle"><img src="img/atendimento%20on%20line.png" width="206" height="25" /></td>
              </tr>
            </table>

            </td>
          </tr>
          <tr>
            <td align="center" valign="middle" height="10"><img src="img/barra3.jpg" width="60%" height="2" /></td>
          </tr>
          <tr>
            <td height="50" align="center" valign="middle"><a href="frota.php"><img src="img/nossa%20frota.png" width="150" /></a></td>
          </tr>
          <tr>
            <td align="center" valign="middle"><a href="frota.php">
              <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="220" height="150" id="FlashID">
                <param name="movie" value="img/gif1.swf" />
                <param name="quality" value="autolow" />
                <param name="wmode" value="transparent" />
                <param name="swfversion" value="6.0.65.0" />
                <!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don’t want users to see the prompt. -->
                <param name="expressinstall" value="Scripts/expressInstall.swf" />
                <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
                <!--[if !IE]>-->
                <object type="application/x-shockwave-flash" data="img/gif1.swf" width="220" height="150">
                  <!--<![endif]-->
                  <param name="quality" value="autolow" />
                  <param name="wmode" value="transparent" />
                  <param name="swfversion" value="6.0.65.0" />
                  <param name="expressinstall" value="Scripts/expressInstall.swf" />
                  <!-- The browser displays the following alternative content for users with Flash Player 6.0 and older. -->
                  <div>
                    <h4>Content on this page requires a newer version of Adobe Flash Player.</h4>
                    <p> <img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" width="112" height="33" /></p>
                  </div>
                  <!--[if !IE]>-->
                </object>
                <!--<![endif]-->
              </object>
            </a></td>
          </tr>
          <tr>
            <td align="center" valign="middle"><img src="img/galeria.gif" width="220" height="88" /></td>
          </tr>
          <tr>
            <td align="center" valign="middle">
            <iframe src="http://selos.climatempo.com.br/selos/MostraSelo120.php?CODCIDADE=144" scrolling="no" frameborder="0" width="150" height="140" marginheight="0" marginwidth="0">
            </iframe>
            </td>
          </tr>
        </table></td>
        <td width="1%">&nbsp;</td>
        <td width="26%" align="center" valign="middle">
        <form action="controle.php" method="get">
        <input name="tipo" type="hidden" id="tipo" value="Orçamento" />
          <table border="0" cellspacing="0" cellpadding="0" align="center">
            <tr>
              <td colspan="2" align="center" valign="middle" ><img src="img/orcamento.jpg" width="205" height="90" /></td>
              </tr>
            <tr>
              <td colspan="2"><p align="center"><strong>Preencha o formulário abaixo para&nbsp;orçar conosco:</strong></p></td>
            </tr>
            <tr>
              <td width="50%" align="right" valign="middle"><strong>Tipo de Reserva: &nbsp;</strong></td>
              <td width="50%" align="left" valign="middle"><select name="reserva" class="idleField" id="reserva" style="font-family:Arial, Helvetica, sans-serif; width:200px;">
<option value="Locacao">Locação</option>
                <option value="Viagem de Compras">Viagem de Compras</option>
                <option value="Feiras">Feiras</option>
                <option value="Pacotes Turistiscos">Pacotes Turisticos</option>
                <option value="Passagem aerea">Passagem áerea</option>
                <option value="Cruzeiro">Cruzeiro</option>
                <option value="Passeio a Negocios">Passeio a Negócios</option>
                <option value="Passeio Religioso">Passeio Religioso</option>
              </select></td>
            </tr>
            <tr>
              <td align="right" valign="middle"><strong>Nome completo: &nbsp;</strong></td>
              <td align="left" valign="middle"><input name="nome" type="text" class="idleField" id="#name" onfocus="cleanit(this);refresh_nu()"  style=" width:200px;" /></td>
            </tr>
            <tr>
              <td align="right" valign="middle"><strong>R.G.: &nbsp;</strong></td>
              <td align="left" valign="middle"><input name="RG" type="text" class="idleField"  id="#status" onfocus="cleanit(this);refresh_nu()"  style=" width:200px;" /></td>
            </tr>
            <tr>
              <td align="right" valign="middle"><strong>Fone: &nbsp;</strong></td>
              <td align="left" valign="middle"><input name="fone" type="text" class="idleField"  id="fone"  onfocus="cleanit(this);refresh_nu()" style=" width:200px;" /></td>
            </tr>
            <tr>
              <td align="right" valign="middle"><strong>E-mail: &nbsp;</strong></td>
              <td align="left" valign="middle"><input name="email" type="text" class="idleField"  id="#email" onfocus="cleanit(this);refresh_nu()" style=" width:200px;" /></td>
            </tr>
            <tr>
              <td align="right" valign="middle"><strong>Comentário:</strong> &nbsp;</td>
              <td align="left" valign="middle"><textarea name="obs" rows="4" class="idleField" id="#message"  style=" width:200px;" onfocus="cleanit(this);refresh_nu()"></textarea></td>
            </tr>
            <tr>
              <td colspan="2" align="center" valign="middle"><input name="Enviar" type="submit" class="idleField" id="Enviar" value="Enviar" style="width:300px; font-family:Arial, Helvetica, sans-serif" /></td>
            </tr>
          </table>
        </form>
        </td>
        <td width="2%">&nbsp;</td>
        <td width="30%"><table width="100%"  border="0" cellspacing="0" cellpadding="0" align="center">
          <tr>
            <td align="center" valign="middle"><a href="passagem.php"><img src="img/viagem%20compras.gif" width="220" height="88" /></a></td>
          </tr>
          <tr>
            <td align="center" valign="middle"><img src="img/aereos.gif" width="220" height="88" /></td>
          </tr>
          <tr>
            <td align="center" valign="middle"><img src="img/especiais.gif" width="220" height="88" /></td>
          </tr>
          <tr>
            <td align="center" valign="middle"><img src="img/feiras.png" width="220" height="88" /></td>
          </tr>
          <tr>
            <td align="center" valign="middle" height="100">
            <table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr class="arial">
    <td align="center" valign="middle" bgcolor="#CCCCCC"><strong>Dólar Comercial</strong></td>
    <td align="center" valign="middle" bgcolor="#CCCCCC"><strong>Dólar Paralelo</strong></td>
    <td align="center" valign="middle" bgcolor="#CCCCCC"><strong>Dólar Turismo</strong></td>
    <td align="center" valign="middle" bgcolor="#CCCCCC"><strong>Euro</strong></td>
  </tr>
  <tr>
<?php
if (!$fp = fopen("http://economia.uol.com.br/cotacoes/", "r")) {
  echo "Erro ao abrir a página de cotação";
  exit;
}
$conteudo = "";
while (!feof($fp)) {
  $conteudo .= fgets($fp, 1024);
}
fclose($fp);
$cont = 0;
preg_match_all("/([0-9],[0-9]{3,}).*([0-9],[0-9]{3,})/", $conteudo, $saida, PREG_SET_ORDER);
foreach ($saida as $saida2) {
  $taxaCompra = $saida2[1];
  $taxaVenda = $saida2[2];
  switch ($cont) {
    case 2:
      echo "<td>Compra: R$ $taxaCompra<br />
				Venda :  R$ $taxaVenda</td>";
      break;
    case 3:
      echo "<td>Compra: R$ $taxaCompra<br />
				Venda :  R$ $taxaVenda</td>";
      break;
    case 4:
      echo "<td>Compra: R$ $taxaCompra<br />
				Venda :  R$ $taxaVenda</td>";
      break;
    case 5:
      echo "<td>Compra: R$ $taxaCompra<br />
				Venda :  R$ $taxaVenda</td>";
      break;
  }
  $cont = $cont + 1;
}
?>
  </tr>
</table>
            </td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>
<script type="text/javascript">
<!--
swfobject.registerObject("FlashID");
//-->
</script>
</body>
</html>