<?php include "_header.php"; ?>

<div class="container">
  <div  class="main-banner banner-home">
    <div class="carousel-inner">
    </div>
  </div>
</div>

<div class="container">
  <!-- Three columns of text below the carousel -->
  <div class="row">
    <div class="col-md-4 text-center">
      <h2 class="green-title">Empresa</h2>
      <p>A Seiki Alimentos Naturais é uma empresa...</p>
      <p><a class="btn btn-success" href="empresa.html">Ver mais »</a></p>
    </div>
    <div class="col-md-4 text-center">
      <h2 class="green-title">Própolis</h2>
      <p>A própolis é um composto resinoso produzido...</p>
      <p><a class="btn btn-success" href="propolis.html">Ver mais »</a></p>
    </div>
    <div class="col-md-4 text-center">
      <h2 class="green-title">Produção</h2>
      <p>A Seiki possui produção própria, situada na...</p>
      <p><a class="btn btn-success" href="producao.html">Ver mais »</a></p>
    </div>
  </div><!-- /.row -->
</div>
<hr class="featurette-divider">

<div class="container">
  <div class="col-md-7">
    <h3 class="green-title">Seiki Alimentos</h3>
    <p class="text-justify">A Seiki Alimentos Naturais é uma empresa brasileira, criada em 1999. Atua no mercado apícola, focado na exportação de própolis bruta.
      Está situada em Guarulhos, desfrutando da logística entre o Aeroporto Internacional de Guarulhos e da proximidade com a cidade de São Paulo.</p>
    </div>
    <div class="col-md-5">

      <a data-toggle="modal" data-target="#gallery" id="linkModal">
        <img src="images/gallery/galeria1_menor.jpg" alt="modal" class="img-responsive img-modal">
        <p class="text-center green-title">Clique aqui para ver a galeria</p>
      </a>

    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <div class="panel panel-success">
                <div class="panel-body">
                  <img src="images/gallery/galeria1_menor.jpg" alt="colmeia" class="center-block img-responsive">
                </div>
                <div class="panel-footer">
                  <h4 class="text-center green-title">Colméia (beehive)</h4>
                </div>
              </div>
            </div>

            <div class="item">
              <div class="panel panel-success">
                <div class="panel-body">
                  <img src="images/gallery/galeria2_menor.jpg" alt="alecrim" class="center-block img-responsive">
                </div>
                <div class="panel-footer">
                  <h4 class="text-center green-title">Alecrim-do-campo <em>(Baccharis dracuncunlifolia)</em></h4>
                </div>
              </div>
            </div>

            <div class="item">
              <div class="panel panel-success">
                <div class="panel-body">
                  <img src="images/gallery/galeria3_menor.jpg" alt="apiario" class="center-block img-responsive">
                </div>
                <div class="panel-footer">
                <h4 class="text-center green-title">Apiário (Apiary)</h4>
                </div>
              </div>
            </div>

            <div class="item">
              <div class="panel panel-success">
                <div class="panel-body">
                  <img src="images/gallery/galeria4.JPG" alt="propolis" class="center-block img-responsive">
                  <div class="panel-footer">
                  <h5 class="text-center green-title">Retirada de própolis da caixa (Removing propolis from the hive)</h5>
                  </div>
                </div>
              </div>
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
          <button type="button" class="btn btn-success" data-dismiss="modal">Fechar</button>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<?php include "_footer.php"; ?>