<?php			
				include("conectar.php");
				$t=$GET_["tipo"];
				$m=$GET_["carro"];
				$n=$GET_["nome"];
				$f=$GET_["fone"];
				$e=$GET_["email"];
				$ds=$GET_["saida"];
				$dr=$GET_["retorno"];
				$o=$GET_["obs"];
				$sql="INSERT INTO frete ( t, m, nome, fone, email, ds, dr, obs, tipo, lido) VALUES ('$t', '$m', '$n', '$f', '$e', '$ds', '$dr', '$obs', 'Frete', 'n')";
				$resultado= mysql_query($sql) or die ("
				<h1>falha na inserção dos dados!</h1>
				<script type='text/javascript'>
						history.back(1);
					</script>
				");
				echo ("<h1>Dados inseridos com sucesso!</h1>");
				sleep(10);
				?>
                		<script type='text/javascript'>
						history.back(1);
						</script>
						<noscript>
						<h1>
						<strong>
                        Java Script desativado :(
                        </strong>
						</h1>
						</noscript>

				


