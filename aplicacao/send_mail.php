<?php
$to = 'contato@foccocambio.com.br';
$subject= "Contato Focco - Enviado pelo Site";

$nome = $_POST['nome'];
$email = $_POST['email'];
$tel = $_POST['telefone'];
$msg = $_POST['msg'];

$message = "
<html>
<head>
  <title>Email enviado pela página CONTATO do Site</title>
</head>
<body>
  <table>
    <tr>
      <td>Nome:</td>
      <td>".$nome."</td>
    </tr>
    <tr>
      <td>E-mail:</td>
      <td>".$email."</td>
    </tr>
    <tr>
      <td>Telefone:</td>
      <td>".$tel."</td>
    </tr>
    <tr>
      <td>Mensagem:</td>
      <td>".$msg."</td>
    </tr>
  </table>
</body>
</html>
";

// $message = "Email enviado pela página CONTATO do Site <br>
// Nome: ".$nome. "<br>
// E-mail: ".$email." <br>
// Telefone: ".$tel." <br>
// Mensagem: ".$msg."  <br>";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

?>