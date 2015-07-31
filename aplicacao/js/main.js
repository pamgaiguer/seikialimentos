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

//send mail without page reloading

$('#btn-submit').click(function(){
  console.log("*** iniciando envio de email ***");
  $.ajax({
    url: '../send_email.php',
    type:'POST',
    data:{
      email: email_address,
      message: message
    },
    success: function(msg){

      alert('E-mail enviado com sucesso! Obrigada!');
    }
  });
});

});