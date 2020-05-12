<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center" valign="middle"><img src="load.gif" height="400"align="middle" /></td>
  </tr>
</table>
<p>&nbsp;
  <?php
			// conecta com o DB
			require_once("conectar.php");
			// Chama o arquivo com a classe WideImage
			require("lib/WideImage.inc.php");
			// define diretórios
			$diretorio = 'img/';
			$dir_thumbs = $diretorio.'thumbs/';
			// varre diretório com as imagens originais
			$arquivos = scandir($diretorio);
			// recebe dados da img
			$img=$_FILES["foto"];
			//recebe id e a categoria para a img
			$id=$_POST["cd"];
			$categoria=$_POST["categoria"];
			// random 4 digit to add to our file name 
			$aleatorio=rand(0000,9999);
			//combine random digit to you file name to create new file name
			$nome=$img["name"];
			$novonome=$aleatorio.$nome;
			//diretorio das imgs
			$imgdir=$diretorio.$novonome;	
			//-------------------------------------------------------------------------------

			  if ($img["error"] > 0)
				{
					echo "Return Code: " . $img["error"] . "<br />";
				}
			  else
				{
						if (file_exists($imgdir))
						  {
						  echo $img["name"] . " já existe. ";
						  }
						else
						{

							$moved=move_uploaded_file($img["tmp_name"], $imgdir);

							IF ($moved)
							 {								
								// Carrega a imagem a ser manipulada
								$image = wiImage::load($imgdir);

								// Redimensiona a imagem
								$image = $image->resize(640, 480);

								// Salva a imagem em um arquivo (novo ou nao) com 80% de qualidade
								$image->saveToFile($imgdir, null, 80);
									
								}
								// insere dados no db
								$sql=mysql_query ("insert into fotos (id,img,cat) VALUES('".$id."','".$novonome."','".$categoria."')");
								if ($sql)
								{
									echo"
									<script>
									history.back(3);
									</script>
									";
								}
								else
								{
								echo"erro mysql";
								}
							}
						}

		
?>

</p>