<?php
require("phpmailer/class.phpmailer.php");
$mail = new PHPMailer(); 
$mail->IsSMTP(); // send via SMTP
$mail->SMTPAuth = true; // turn on SMTP authentication
$mail->Username = "adm@ednantur.com.br"; // SMTP username
$mail->Password = "ednantur123"; // SMTP password
$webmaster_email = "adm@ednantur.com.br"; //Reply to this email ID
$email="adm@ednantur.com.br"; // Recipients email ID
$name="Ednantur"; // Recipient's name
$mail->From = $webmaster_email;
$mail->FromName = "Ednantur";
$mail->AddAddress($email,$name);
$mail->AddReplyTo($webmaster_email,"Webmaster");
$mail->WordWrap = 50; // set word wrap
$mail->AddAttachment("/var/tmp/file.tar.gz"); // attachment
$mail->AddAttachment("/tmp/image.jpg", "new.jpg"); // attachment
$mail->IsHTML(true); // send as HTML
$mail->Subject = "Este é o assunto";
$mail->Body = "Oi, Este é o CORPO HTML "; //HTML Body
$mail->AltBody = "Este é o corpo, quando vista do usuário no formato de texto simples"; //Text Body
if(!$mail->Send())
{
echo "Erro: " . $mail->ErrorInfo;
}
else
{
echo "A mensagem foi enviada com sucesso";
}
?>