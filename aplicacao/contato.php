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
      <div class="retornoHtml">
        <form>
          <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" placeholder="Nome" class="form-control" required>
          </div>

          <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" placeholder="E-mail" class="form-control" required>
          </div>

          <div class="form-group">
            <label for="msg">Mensagem</label>
            <textarea name="msg" id="msg" class="form-control" required></textarea>
          </div>
          <input type="button" value="Enviar" id="btn-submit">

          <div id="request-result"></div>
        </form>
      </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3659.8320777122694!2d-46.53915039999995!3d-23.46652089999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cef568bfd10b0b%3A0x658ea24945fe4c5b!2sR.+S%C3%A3o+Paulo%2C+43+-+Jardim+Tijuco%2C+Guarulhos+-+SP%2C+07020-210!5e0!3m2!1spt-BR!2sbr!4v1437348440390" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      <p class="text-center green-title">Venha nos visitar! Estamos abertos de segunda à sexta das 09h00 às 18h00.</p>
    </div>
  </div><!-- /.row -->
</div>

<?php include "_footer.php"; ?>