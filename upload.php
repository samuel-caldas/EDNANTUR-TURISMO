<html>
<body>
<img src="feiras/load.gif" width="400" height="400" />
<p>
  <?php
  // conecta com o DB
  require_once("conectar.php");
  // include da classe m2brimagem
  include('m2brimagem.class.php');
  // instancia objeto m2brimagem
  $oImg = new m2brimagem();
  // define diretórios
  $diretorio = 'pic/';
  $dir_thumbs = 'img/';
  // varre diretório com as imagens originais
  $arquivos = scandir($diretorio);
  // recebe dados da img
  $img = $_FILES["foto"];
  //recebe id para a img
  $id = $_GET["cd"];
  // random 4 digit to add to our file name 
  $aleatorio = rand(0000, 9999);
  //combine random digit to you file name to create new file name
  $nome = $img["name"];
  $novonome = $aleatorio . $nome;
  //-------------------------------------------------------------------------------
  if (
  	(($img["type"] == "image/gif")
  		|| ($img["type"] == "image/png")
  		|| ($img["type"] == "image/jpeg")
  		&& ($img["type"] == "image/pjpeg"))
  ) {
	  if ($img["error"] > 0) {
		  echo "Return Code: " . $img["error"] . "<br />";
	  } else {

		  if (file_exists($diretorio . $img["name"])) {
			  echo $img["name"] . " já existe. ";
		  } else {
			  copy($img["tmp_name"], $diretorio . $novonome);
			  // Redimenciona
  			foreach ($arquivos as $arquivo) {
				  // "carrega" arquivo
  				$oImg->carrega($diretorio . $arquivo);
				  $valida = $oImg->valida();
				  if ($valida == 'OK') {
					  // redimensiona
  					$oImg->redimensiona(250, 200, 'crop');
					  // salva no diretório das miniaturas
  					$oImg->grava($dir_thumbs . $arquivo, 100);
				  }
			  }

		  }
	  }
	  // deleta a img original
  	unlink($diretorio . $i);
	  // insere dados no db
  	$sql = "insert into fotos (id, img) VALUES('" . $id . "','" . $novonome . "')";
	  mysql_query($sql);

  } else {
	  echo "Arquivo invalido";
  }



  ?>  
</p>
</body>
</html>