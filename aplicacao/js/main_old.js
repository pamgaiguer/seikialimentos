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

$('#btn-submit').click(function() {
  var $requestResult = $("#request-result");

  $.ajax({
    url: '../contato_action.php',
    type: 'POST',
    data:{
      nome: $("#nome").val(),
      email: $("#email").val(),
      telefone: $("#telefone").val(),
      msg: $("#msg").val()
    },
    error: function() {
      $requestResult.append($("<div>", {
        "class": "alert alert-danger",
        "text": "E-mail não enviado!"
      }));
    },
    success: function(msg){
      console.log(msg);
      $requestResult.append($("<div>", {
        "class": "alert alert-success",
        "text": "E-mail enviado com sucesso."
      }));
    }
  });
});

});