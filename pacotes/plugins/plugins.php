<?php
	//  Carrega folhas de estilo css
	
		function css($linkcss)
		{
			echo("<link rel='stylesheet' type='text/css' href='plugins/".$linkcss."' media='screen' />");
		
		}
		
	//  Carrega java script
	
		function js($linkjs)
		{
			echo("<script language='JavaScript' src='plugins/".$linkjs."'></script>");
		
		}
		
	//  Carrega plugin "loding...."
	
		function carregar()
		{
			css("loading/carregador.css");
			js("loading/carregador.js");
		
		}
		
	// Carrega editor de texto estilo MS Word
	
		function word($css)
		{
			js("word/tiny_mce.js");
			echo"
				<script type='text/javascript'>
					// JavaScript Document
						tinyMCE.init(
						{
							// General options
							mode : 'textareas',
							theme : 'advanced',
							skin : 'o2k7',
							language : 'pt',
							plugins : 'autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,inlinepopups,autosave',
					
							// Theme options
							theme_advanced_buttons1 : 'save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,styleselect,formatselect,fontselect,fontsizeselect',
							theme_advanced_buttons2 : 'cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor',
							theme_advanced_buttons3 : 'tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen',
							theme_advanced_buttons4 : 'insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft',
							theme_advanced_toolbar_location : 'top',
							theme_advanced_toolbar_align : 'left',
							theme_advanced_statusbar_location : 'bottom',
							theme_advanced_resizing : true,
					
							// Example word content CSS (should be your site CSS) this one removes paragraph margins
							content_css : '".$css."',
					
							// Drop lists for link/image/media/template dialogs
							template_external_list_url : 'lists/template_list.js',
							external_link_list_url : 'lists/link_list.js',
							external_image_list_url : 'lists/image_list.js',
							media_external_list_url : 'lists/media_list.js',
					
							// Replace values for the template plugin
							template_replace_values : 
							{
								username : 'Some User',
								staffid : '991234'
							}
						});
				</script>
			";
		}
		
	// carrega plugin de thubs
		function thumb ()
		{
			css("thumb/magicthumb/magicthumb.css");
			js("thumb/magicthumb/magicthumb.js");
		}
		
	// carrega plugin de zoom
	
		function zoom ()
		{
			css("zoom/magiczoom/magiczoom.css");
			js("zoom/magiczoom/magiczoom.js");
		}
		
	// Carrega cotação do dolar e euro
	
		function cotacao()
			{
				if(!$fp=fopen("http://economia.uol.com.br/cotacoes/" ,"r" )) 
					{ 
						echo "Erro ao abrir a página de cotação";     
						exit;
					}
				$conteudo = '';
				while(!feof($fp)) 
					{ // leia o conteúdo da página   
						$conteudo .= fgets($fp,1024); 
					}
				fclose($fp);
				$cont =0;
				preg_match_all("/([0-9],[0-9]{3,}).*([0-9],[0-9]{3,})/", $conteudo, $saida, PREG_SET_ORDER);
				foreach ($saida as $saida2)
					{
						$taxaCompra	= $saida2[1];
						$taxaVenda	= $saida2[2];
						switch($cont)
						{
							case 2: $comercial="
							<b>Dólar Comercial</b>
							<br>Compra: <b>R$</b> $taxaCompra -- 
							Venda :<b> R$ </b>$taxaVenda<br><br>"; 
							break;
							
							case 3: $paralelo="
							<b>Dólar Paralelo</b>
							<br>Compra: <b>R$</b> $taxaCompra -- 
							Venda :<b> R$ </b>$taxaVenda<br><br>"; 
							break;
							
							case 4:	$turismo="<b>Dólar Turismo </b>
							<br>Compra: <b>R$</b> $taxaCompra -- 
							Venda :<b> R$ </b>$taxaVenda<br><br>"; 
							break;
							
							case 5:	$euro="
							<b>Euro  </b>
							<br>Compra: <b>US$</b> $taxaCompra -- 
							Venda :<b> US$ </b>$taxaVenda<br><br>"; 
							break;
						}
					$cont = $cont+1;
					}
			}

		// Configurações
		function start($texto)
			{
				$funcoes=explode(",",$texto);
				$tamanho=count($funcoes);
				$i=0;
				while ($i<=$tamanho)
					{
						$char=explode($funcoes[$i]);
						$charl=count($char);
						if ($char[$charl] = "|")
						{
							$param=explode("|",$funcoes[$i]);
							$parametro=$param[2];
						}
						
						switch ($funcoes[$i])
							{
								case "carregar": 
								carregar();
								break;
								
								case "css":
								css($parametro);
								break;
								
								case "js":
								js($parametro);
								break;
								
								case "word":
								word ($parametro);
								break;
								
								case "thumb":
								thumb();
								break;
								
								case "zoom":
								zoom();
								break;
								
								case "cotacao":
								cotacao();
								break;
							}
							$i++;
					}
			}
?>
