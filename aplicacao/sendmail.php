<?php

require_once('phpmailer/class.phpmailer.php');

/*Recebe os dados do cliente ajax via POST*/
$nome = $_POST['nome'];
$email = $_POST['email'];
$msg = $_POST['msg'];
$body = "";

try{
  $mail = new PHPMailer(true); //new instance with exceptions enabled

  $body .= "<h2>Enviando e-mails com AJAX e PHP via SMTP</h2>";
  $body .= "Nome: $nome <br>";
  $body .= "E-mail: $email <br>";
  $body .= "Mensagem: <br>";
  $body .= $msg;
  $body .= "<br>";
  $body .= "----------------------------";
  $body .= "<br>";
  $body .= "Enviado em <strong>".date("h:m:i d/m/Y")." por ".$_SERVER['REMOTE_ADDR']."</strong>"; //mostra a data e o IP
  $body .= "<br>";
  $body .= "----------------------------";

  $mail->isSMTP(); //tell the class to use SMTP
  $mail->SMTPAuth = true; //enable SMTP authentication
  $mail->Port = 587;
  $mail->Host = "smtp.seikialimentos.com.br"; //smtp servidor
  $mail->Username = "contato@seikialimentos.com.br"; //smtp usuario
  $mail->Password = "Propolis@12";

  $mail->IsSendMail();

  $mail->AddReplyTo($email, $nome); //responder para
  $mail->From = $email; //e-mail fornecido pelo cliente
  $mail->FromName = $nome; //nome fornecido pelo cliente

  $to = "contato@seikialimentos.com.br"; //enviar para
  $mail->AddAddress($to);
  $mail->Subject = "Assunto do e-mail"; //Assunto
  $mail->WordWrap = 80; //set wordwrap

  $mail->MsgHTML($body);

  $mail->IsHTML(true);

  $mail->Send();
  echo 'Mensagem enviada com sucesso'; //retorno devolvido para o ajax caso sucesso
}
catch(phpmailerException $e){
  echo $e->errorMessage(); //retorno devolvido para o ajax caso erro
}
?>