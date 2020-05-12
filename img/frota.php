
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Nossa Frota</title>
<link rel="stylesheet" href="css/screen.css" media="screen" />
<style type="text/css">
<!--
.arial {
	font-family: Arial, Helvetica, sans-serif;
}
-->
</style>
<style type="text/css">
	<!--
		body {
			padding:0px;
			margin:0px;
		}

		#menu ul {
			padding:0px;
			margin:0px;
			float: left;
			width: 100%;
			background-color:#EDEDED;
			list-style:none;
			font:80% Tahoma;
		}

		#menu ul li { display: inline; }

		#menu ul li a {
			background-color:#EDEDED;
			color: #333;
			text-decoration: none;
			border-bottom:3px solid #EDEDED;
			padding: 2px 10px;
			float:left;
		}

		#menu ul li a:hover {
			background-color:#D6D6D6;
			color: #6D6D6D;
			border-bottom:3px solid #EA0000;
		}
	-->
		#navlist li
		{
		display: inline;
		list-style-type: none;
		padding-right: 20px;
		}
	</style>
</head>

<body bgcolor="#FFFFFF" link="#FFFFFF" alink="#FFFFFF" vlink="#FFFFFF" text="#000000">
<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td align="left" valign="middle"> &nbsp; <img src="img/nossa%20frota.png" width="239" height="48" /></td>
  </tr>
  <tr>
    <td align="center" valign="middle">
		<div id="navlist">
            <ul>
            
            	<?php

					include_once("conectar.php");
					
						for ($i = 0; $i <= 25; $i++) 
						{
						$l=1;
						$sql= MYSQL_QUERY("select * from frota order by a") or die(mysql_error());
						while ($campo = mysql_fetch_row($sql))
						{
									$img=$campo[1];
									$serie=$campo[2];
									$marca=$campo[3];
									$modelo=$campo[4];
									$ano=$campo[5];
									$lugares=$campo[6];
									$tipo=$campo[7];
									$esp=$campo[8];
										
										if ($l<4)
												{
													echo("
													<li>
														<table width='100%' border='0' align='center' cellpadding='0' cellspacing='0'>
															  <tr>
																<td height='132' colspan='2' align='center' valign='middle'><img src='galeria/thumb/".$img."' width='200' height='130' /></td>
															  </tr>
															  <tr>
																<td width='50%' align='left' valign='middle'><strong>S&eacute;rie:&nbsp;</strong></td>
																<td width='50%' align='left' valign='middle'>".$serie."</td>
															  </tr>
															  <tr>
																<td align='left' valign='middle'><strong>Marca:&nbsp;</strong></td>
																<td align='left' valign='middle'>".$marca."</td>
															  </tr>
															  <tr>
																<td align='left' valign='middle'><strong>Modelo:&nbsp;</strong></td>
																<td align='left' valign='middle'>".$modelo."</td>
															  </tr>
															  <tr>
																<td align='left' valign='middle'><strong>Ano:&nbsp;</strong></td>
																<td align='left' valign='middle'>".$ano."</td>
															  </tr>
															  <tr>
																<td align='left' valign='middle'><strong>Lugares:&nbsp;</strong></td>
																<td align='left' valign='middle'>".$lugares."</td>
															  </tr>
															  <tr>
																<td align='left' valign='middle'><strong>Tipo:&nbsp;</strong></td>
																<td align='left' valign='middle'>".$tipo."</td>
															  </tr>
															  <tr>
																<td align='left' valign='middle'><strong>Especifica&ccedil;&otilde;es:&nbsp;</strong></td>
																<td align='left' valign='middle'>".$esp."</td>
															  </tr>
														</table>							
													</li>
													");
												$l=$l+1;
												}
												else
													{
												echo("
															 <br />
															<li>
																<table width='100%' border='0' align='center' cellpadding='0' cellspacing='0'>
																	  <tr>
																		<td height='132' colspan='2' align='center' valign='middle'><img src='galeria/thumb/".$img."' width='200' height='130' /></td>
																	  </tr>
																	  <tr>
																		<td width='50%' align='left' valign='middle'><strong>S&eacute;rie:&nbsp;</strong></td>
																		<td width='50%' align='left' valign='middle'>".$serie."</td>
																	  </tr>
																	  <tr>
																		<td align='left' valign='middle'><strong>Marca:&nbsp;</strong></td>
																		<td align='left' valign='middle'>".$marca."</td>
																	  </tr>
																	  <tr>
																		<td align='left' valign='middle'><strong>Modelo:&nbsp;</strong></td>
																		<td align='left' valign='middle'>".$modelo."</td>
																	  </tr>
																	  <tr>
																		<td align='left' valign='middle'><strong>Ano:&nbsp;</strong></td>
																		<td align='left' valign='middle'>".$ano."</td>
																	  </tr>
																	  <tr>
																		<td align='left' valign='middle'><strong>Lugares:&nbsp;</strong></td>
																		<td align='left' valign='middle'>".$lugares."</td>
																	  </tr>
																	  <tr>
																		<td align='left' valign='middle'><strong>Tipo:&nbsp;</strong></td>
																		<td align='left' valign='middle'>".$tipo."</td>
																	  </tr>
																	  <tr>
																		<td align='left' valign='middle'><strong>Especifica&ccedil;&otilde;es:&nbsp;</strong></td>
																		<td align='left' valign='middle'>".$esp."</td>
																	  </tr>
																</table>							
															</li>
															");
														$l=1;
												
													}                               
						}
						}
						
				?>
            														
            
            </ul>
    	</div>
    </td>
  </tr>
</table>

</body>
</html>