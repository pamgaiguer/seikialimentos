<?php

include_once ("class.phpmailer.php");
include_once ("class.pop3.php");
include_once ("class.smtp.php");

$message = "";

foreach ($_POST  as $key => $value) {
  $message .= "{$key} => {$value} <br>";
}

# return mail ("contato@seikialimentos.com.br", "Contato SEIKI - Enviado pelo Site", $message);

$To = "contato@seikialimentos.com.br";
$Subject = "Contato SEIKI - Enviado pelo Site";
$Message = $message;

$Host = 'smtp.seikialimentos.com.br';
$Username = 'contato';
$Password = 'Propolis@12';
$Port = "587";

$mail = new PHPMailer();
$body = $Message;
$mail->IsSMTP(); // telling the class to use SMTP
$mail->Host = $Host; // SMTP server
$mail->SMTPDebug = 0;
$mail->SMTPAuth = true; // enable SMTP authentication
$mail->Port = $Port; // set the SMTP port for the service server
$mail->Username = $Username; // account username
$mail->Password = $Password; // account password

$mail->SetFrom($usuario, $nomeDestinatario);
$mail->Subject = $Subject;
$mail->MsgHTML($body);
$mail->AddAddress($To, "");

return $mail->Send();

exit;