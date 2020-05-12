<?php
		ini_set('upload_tmp_dir', '/temp/');

	
	// Configurações do DB
	$hostname      = 'localhost';
	$usuario       = 'ednantur';
	$senha         = 'ed123';
	$db            = 'ednantur';
	// Função retorna erro
	function myErro($msgerro){
	    echo "<script>alert(".$msgerro.");</script>";
	}
	// conecta && seleciona
	$conexao = mysql_connect($hostname , $usuario , $senha) or die(myErro("Falha na Conexão com o Banco de Dados"));
	mysql_select_db($db , $conexao) or die(myErro("Falha ao selecionar a DB - $db"));

?>
