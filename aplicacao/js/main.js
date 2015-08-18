$(document).ready(function() {

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

$('#btn-submit').click( function(){ /* Quando clicar em #btn */
        /* Coletando dados */
        var nome  = $('#nome').val();
        var email = $('#email').val();
        var msg   = $('#msg').val();

        /* Validando */
        if(nome.length <= 3){
            alert('Por favor, informe seu nome.');
            return false;
        }
        if(email.length <= 5){
            alert('Por favor, informe um e-mail válido.');
            return false;
        }
        if(msg.length <= 5){
            alert('Por favor, escreva a mensagem de contato');
            return false;
        }

        /* construindo url */
        var urlData = "&nome=" + nome + "&email=" + email + "&msg=" + msg ;

        /* Ajax */
        $.ajax({
             type: "POST",
             url: "sendmail.php", /* endereço do script PHP */
             async: true,
             data: urlData, /* informa Url */
             success: function(data) { /* sucesso */
                console.log("sucesso!");
                $("#retornoHtml").append("<p class='text-center green-title'>E-mail enviado com sucesso!</p>");
             },
             beforeSend: function() { /* antes de enviar */
                 $('.loading').fadeIn('fast');
             },
             complete: function(){ /* completo */
                 $('.loading').fadeOut('fast'); //wow!
             }
         });
    });
});