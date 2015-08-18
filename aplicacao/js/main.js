$(document).ready(function() {
  //console.log( "ready!" );

  var target = {
    'index': 'index.php',
    'empresa': 'empresa.php',
    'propolis': 'propolis.php',
    'producao': 'producao.php',
    'eventos': 'eventos.php',
    'contato': 'contato.php'
  };
  var pageName = 'index';
  var address = window.location.href.split('/');
  $.each(address, function(key, item) {
    if (item.indexOf("php") != -1) {
      pageName = item.split('.')[0];
    }
  });
  $('a[href^="' + target[pageName] + '"]').parent().addClass("active");


  $(".nav a").on("click", function(){
    $(".nav").find(".active").removeClass("active");
    $(this).parent().addClass("active");
  });

  //iniciando o envio de email via ajax
  //obtendo valores
  $("#btn-submit").click(function(){
    console.log("cliquei");
    var nome = $("#nome").val();
    var email = $("#email").val();
    var msg = $("#msg").val();
  });

  /* Validando */
  if(nome.length <= 3){
    alert('Por favor, informe seu nome');
    return false;
  }
  if(email.length <= 5){
    alert('Por favor, informe seu email no formato email@provedor.com.br');
    return false;
  }
  if(msg.length <= 5){
    alert('Escreva uma mensagem');
    return false;
  }

var urlData = "&nome" + nome + "&email" + email + "&msg" + msg;

$.ajax({
  type: 'POST',
  url: 'sendmail.php',
  async: true,
  data: urlData,
    success: function(data){ //caso de sucesso
      console.log(data);
      $("#retornoHtml").html(data);
    },
    beforeSend: function () { //antes de enviar
      $('.loading').fadeIn('fast');
    },
    complete:function (){ //completo
      $('.loading').fadeOut('fast');
    }
  });

});