<?php
			require_once("conectar.php");
			$conteudo="select * from fotos where cat='".$_GET["categoria"]."' and id='".$_GET["cd"]."'";
			$consulta= MYSQL_QUERY($conteudo) or die(mysql_error());
			while ($imagem = mysql_fetch_row($consulta))
			{	
						$img="img/".$imagem[2];
						unlink($img);
						MYSQL_QUERY("delete from Fotos where cat='".$_GET["categoria"]."' and id='".$_GET["cd"]."'") or die(mysql_error());
			 }
					
	

?>  
<script>
history.back();
</script>
