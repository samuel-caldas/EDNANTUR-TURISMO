<?php
	ini_set('upload_tmp_dir', '/temp/');

	// Configurações do DB
	$hostname      = 'localhost';
	$usuario       = 'ednantur';
	$senha         = 'ed123';
	$db            = 'ednantur';

	// Função retorna erro
	function myErro($msgerro){
	    echo "<script type='text/javascript'>alert(".$msgerro.");history.back(1);</script>";
	}

	// conecta && seleciona
	$conexao = mysql_connect($hostname , $usuario , $senha) or die(myErro("Falha na Conexão com o Banco de Dados"));
	mysql_select_db($db , $conexao) or die(myErro("Falha ao selecionar a DB - $db"));
?>
<style type="text/css">
<!--
.fonte{font-family:Arial, Helvetica, sans-serif}body{background-color:#FFF;margin:0;padding:0}a:hover{text-decoration:underline}a:link,a:visited,a:active{text-decoration:none}
-->
</style>