<?php
  $to = 'contato@seikialimentos.com.br';
  $subject= "Contato SEIKI - Enviado pelo Site";
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $tel = $_POST['telefone'];
  $msg = $_POST['msg'];
  $message = "Email enviado pelo CONTATO o Site <br>
  Nome: ".$nome. "<br>
  E-mail: ".$email." <br>
  Telefone: ".$tel." <br>
  Mensagem: ".$msg."  <br>";

  $headers .= "Content-type: text/html; charset=utf-8\n";

    if(!mail($to, $subject, $message, $headers ,"-r".$to)){ // Se for Postfix
       $headers .= "Return-Path: " . $to . $quebra_linha; // Se "não for Postfix"
       mail($to, $subject, $message, $headers );
     }
?>
   <?php include "_header.php"; ?>
   <div class="container">
    <div  class="main-banner banner-contato">
      <div class="carousel-inner">
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
      <p class="btn-seiki">Contato</p>

      <div class="panel panel-success">
        <div class="panel-body">
        <h3 class="green-title text-center">E-mail enviado com sucesso</h3>
          <h4 class="green-title text-center">Em breve, entraremos em contato!</h4>
        </div>
      </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3659.8320777122694!2d-46.53915039999995!3d-23.46652089999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cef568bfd10b0b%3A0x658ea24945fe4c5b!2sR.+S%C3%A3o+Paulo%2C+43+-+Jardim+Tijuco%2C+Guarulhos+-+SP%2C+07020-210!5e0!3m2!1spt-BR!2sbr!4v1437348440390" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      <p class="text-center green-title">Venha nos visitar! Estamos abertos de segunda à sexta das 09h00 às 18h00.</p>
    </div>
  </div><!-- /.row -->
</div>

<?php include "_footer.php"; ?>