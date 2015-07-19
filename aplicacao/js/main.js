$(".nav a").on("click", function(){
 $(".nav").find(".active").removeClass("active");
 $(this).parent().addClass("active");
});

function valida(form) {
  if (form.nome.value=="") {
    alert("Preencha o nome corretamente.");
    form.nome.focus();
    return false;
  }
  var filtro_mail = /^.+@.+\..{2,3}$/
  if (!filtro_mail.test(form.email.value) || form.email.value=="") {
    alert("Preencha o e-mail corretamente.");
    form.email.focus();
    return false;
  }
  if (form.tel.value=="") {
    alert("Preencha o telefone corretamente.");
    form.tel.focus();
    return false;
  }
}
