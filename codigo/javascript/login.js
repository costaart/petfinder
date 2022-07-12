$(document).ready(function () {

})

$("#formulario").submit(function (e) {
  e.preventDefault();
  var email = $("#campoEmail").val()
  var senha = $("#campoSenha").val()
  $("#modal-loader").modal('show')

  $.ajax({

    url: '../formularios/login.php',
    method: 'POST',
    dataType: 'json',
    data: { email: email, senha: senha },
    complete: function (response) {
      $("#modal-loader").modal('hide')
      if (response.responseJSON == true)
        fazer_login();
      else {
        repetir_login();
      }
    }
  })
})

function repetir_login() {
  $(".error-field").empty()
  $(".campos").css("border-bottom-color", "rgb(215, 48, 48)")
  $(".error-field").append('<div class="row justify-content-center created-element">')
  $(".created-element").append('<a>Nome ou usuário incorretos.</a>')
}

function fazer_login() {
  window.location.href = '../index.php'
}