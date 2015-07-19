<?php include "_header.php"; ?>


  <div class="container">
    <div  class="main-banner banner-home">
      <div class="carousel-inner">
      </div>
    </div>
  </div>
</div>

<div class="container">
  <!-- Three columns of text below the carousel -->
  <div class="row">
    <div class="col-md-4 text-center">
      <h2 class="green-title">Empresa</h2>
      <p>A Seiki Alimentos Naturais é uma empresa...</p>
      <p><a class="btn btn-default" href="empresa.html">Ver mais »</a></p>
    </div>
    <div class="col-md-4 text-center">
      <h2 class="green-title">Própolis</h2>
      <p>A própolis é um composto resinoso produzido...</p>
      <p><a class="btn btn-default" href="propolis.html">Ver mais »</a></p>
    </div>
    <div class="col-md-4 text-center">
      <h2 class="green-title">Produção</h2>
      <p>A Seiki possui produção própria, situada na...</p>
      <p><a class="btn btn-default" href="producao.html">Ver mais »</a></p>
    </div>
  </div><!-- /.row -->

  <hr class="featurette-divider">

  <div class="container">
    <div class="col-md-7">
      <h3 class="green-title">Seiki Alimentos</h3>
      <p class="text-justify">A Seiki Alimentos Naturais é uma empresa brasileira, criada em 1999. Atua no mercado apícola, focado na exportação de própolis bruta.
      Está situada em Guarulhos, desfrutando da logística entre o Aeroporto Internacional de Guarulhos e da proximidade com a cidade de São Paulo.</p>
    </div>
    <div class="col-md-5">

      <a data-toggle="modal" data-target="#myModal" id="linkModal">
        <img src="images/gallery/producao-img-001.jpg">
      </a>

    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="images/gallery/producao-img-001.jpg">
            </div>
            <div class="item">
              <img src="images/gallery/propolis-lateral-esquerda.jpg">
            </div>
          </div>

          <!-- Controls -->
          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include "_footer.php"; ?>