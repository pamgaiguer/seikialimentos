<?php

require 'phpmailer/class.phpmailer.php';
require 'phpmailer/class.smtp.php';

$from = 'contato@seikialimentos.com.br';
$fromName = 'Contato Site';

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
$Secure = '';

$mail = new PHPMailer();
$body = $Message;
$mail->isHTML(true);
$mail->CharSet = 'utf-8';
$mail->IsSMTP(); // telling the class to use SMTP
$mail->setLanguage('pt', 'phpmailer/language/phpmailer.lang-pt.php');
$mail->Host = $Host; // SMTP server
$mail->SMTPDebug = 0;
$mail->SMTPAuth = true; // enable SMTP authentication
$mail->Port = $Port; // set the SMTP port for the service server
$mail->Username = $Username; // account username
$mail->Password = $Password; // account password

$mail->From = $from;
$mail->FromName = $fromName;
$mail->Subject = $Subject;
$mail->MsgHTML($body);
$mail->AddAddress($To, 'Contato');

return $mail->Send();

exit;

?>