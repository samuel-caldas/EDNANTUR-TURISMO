<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>controle</title>
</head>
<body>
<?php
	include("conectar.php");
	$tipo=$_GET["tipo"];
		if ($tipo=="frete")
			{
				$a=$_GET["a"];
				$b=$_GET["b"];
				$c=$_GET["c"];
				$d=$_GET["d"];
				$e=$_GET["e"];
				$f=$_GET["f"];
				$g=$_GET["g"];
				$h=$_GET["h"];
				$inserir="INSERT INTO frete (a, b, c, d, e, f, g, h, tipo, lido) VALUES ('".$a."','".$b."','".$c."','".$d."','".$e."','".$f."','".$g."','".$h."','Frete','n')";
				$resultado= mysql_query($inserir) or die ("falha na inserção dos dados!");
				echo ("<h1>Dados inseridos com sucesso!</h1>");
				?>
                <meta http-equiv="refresh" content="0;URL=aluguel.php" />
				<?php

			}
		else if ($tipo=="Viagem de Compras")
			{
				$reserva=$_GET["reserva"];
				$nome=$_GET["nome"];
				$fone=$_GET["fone"];
				$email=$_GET["email"];
				$obs=$_GET["obs"];
				$tipo=$_GET["tipo"];
				$inserir="INSERT INTO compra ( r, n, f, e, o, lido, Tipo) VALUES ('".$reserva."', '".$nome."', '".$fone."', '".$email."', '".$obs."', 'n', '".$tipo."')";
				$resultado= mysql_query($inserir) or die ("falha na inserção dos dados!");
				echo ("<h1>Dados inseridos com sucesso!</h1>");
				?>
                <meta http-equiv="refresh" content="0;URL=passagem.php" />
				<?php

			}
		else if ($tipo=="Orçamento")
			{
				$reserva=$_GET["reserva"];
				$nome=$_GET["nome"];
				$RG=$_GET["RG"];
				$fone=$_GET["fone"];
				$email=$_GET["email"];
				$obs=$_GET["obs"];
				$tipo=$_GET["tipo"];
				$inserir= "INSERT INTO orcamento ( r, n, rg, f, e, o, lido, Tipo) VALUES ('".$reserva."', '".$nome."', '".$RG."', '".$fone."', '".$email."', '".$obs."', 'n', '".$tipo."')";
				$resultado= mysql_query($inserir) or die ("falha na inserção dos dados!");
				echo ("<h1>Dados inseridos com sucesso!</h1>");
				?>
                <meta http-equiv="refresh" content="0;URL=inicio.php" />
				<?php
 
			}
		else if ($tipo=="Fale Conosco")
			{
				$motivo=$_GET["motivo"];
				$nome=$_GET["nome"];
				$fone=$_GET["fone"];
				$email=$_GET["email"];
				$obs=$_GET["obs"];
				$inserir= 	("INSERT INTO contato ( m, n, f, e, o, tipo, lido) VALUES ('".$motivo."', '".$nome."', '".$fone."', '".$email."', '".$obs."', 'Fale Conosco', 'n')");
				$resultado= mysql_query($inserir) or die ("falha na inserção dos dados!");
				echo ("<h1>Dados inseridos com sucesso!</h1>");
				?>
                <meta http-equiv="refresh" content="0;URL=fale.php" />
				<?php
			}
		else if ($tipo=="Cadastro")
			{	
				$i=$_GET["i"];
				$nome=$_GET["nome"];
				$rg=$_GET["rg"];
				$fone=$_GET["fone"];
				$email=$_GET["email"];
				$obs=$_GET["obs"];
				$inserir= 	"INSERT INTO clientes ( i, n, rg, f, e, o, ido) VALUES ('".$i."', '".$nome."', '".$rg."', '".$fone."', '".$email."', '".$obs."', 'n')";
				$resultado= mysql_query($inserir) or die ("falha na inserção dos dados!");
				echo ("<h1>Dados inseridos com sucesso!</h1>");
				?>
                <meta http-equiv="refresh" content="0;URL=entrar.php" />
				<?php				
			}
				else if ($tipo=="novo")
				{	
				$n=$_POST["nome"];
				$s=$_POST["senha"];
				$inserir= ("INSERT INTO login ( n, s) VALUES ('".$n."', '".$s."')"); 
				$resultado= mysql_query($inserir) or die ("falha na inserção dos dados!");
				echo ("<h1>Dados inseridos com sucesso!</h1>");
				?>
                <meta http-equiv="refresh" content="0;URL=painel.php" />
                <?php
			}
		else
			{
				echo("<font color='red'><h1>Erro fatal :)</h1></font>");

			}

?>
						<noscript>
						<h1>
						<strong>
                        Java Script desativado :(
                        </strong>
						</h1>
						</noscript>
</body>
</html>