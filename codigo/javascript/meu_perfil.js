let botao_adicionar_descricao = document.getElementById("add-descricao")
let file = document.getElementById('input_file');
var btn_images = document.querySelector(".image-btn")
var user_image;
var dados_info = [];

$(document).ready(function () {
    $('#form-info-edit').trigger("reset");
})

$(".image-btn").click(function () {
    user_image = $(this).css('background-image')
    user_image = filtrar_imagem()
    exibir_modal_foto()
})
$(".btn-change-image").click(function () {
    $("#modal_confirmar_foto").modal("hide")
    esconder_conteudo()
    trocar_foto()
})
function esconder_editar_info() {
    $(".section-info-change").fadeOut("swing", function () {
        $('.form-info').trigger("reset");
        $(".created-content").remove();
        $(".main-content").fadeIn();
    })
}

//Carrega a imagem a partir do click em "alterar foto"
function carregar_tela_imagem() {
    $(".section-main").fadeOut("swing", function () {
        $(".section-image").fadeIn()
    });
}
function trocar_foto() {
    $(".user-image").remove()
    $(".user-image-field").append(`<img src="${user_image}" height="200" width="200" class="imagem user-image rounded-circle" onclick="carregar_tela_imagem()">`)
}
function esconder_conteudo() {
    $(".section-image").fadeOut("swing", function () {
        $(".section-main").fadeIn()
    });
}
function exibir_modal_foto() {
    $(".modal-body").append(`<div class="row justify-content-center created-element-modal"><img src="${user_image}" width="150" class="created-image" name="user-image-modal"></div>`)
    $("#modal_confirmar_foto").modal("show")
    excluir_elementos_criados()
}
function excluir_elementos_criados() {
    $(".modal").on("hidden.bs.modal", function () {
        $(".created-element-modal").remove()
    })
}
function filtrar_imagem() {
    user_image = user_image.replace('url(', '').replace(')', '').replace(/\"/gi, "");
    return user_image;
}
$("#form-image").submit(function (e) {
    e.preventDefault();
    let img = $('.created-image').attr('src');

    $.ajax({

        url: '../php/update_image.php',
        method: 'POST',
        dataType: 'json',
        data: { img: img }
    }).done(function (result) {

    })
})
function configurar_mask() {
    var maskBehavior = function (val) {
        return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
    },
        options = {
            onKeyPress: function (val, e, field, options) {
                field.mask(maskBehavior.apply({}, arguments), options);
            }
        };
    $('.phone').mask(maskBehavior, options);
    $('.info-field[name="info-tel"]').mask('(00) 00000-0000');
    $('.info-field[name="info-cep"]').mask('00000-000');
}

function abrir_editor_info() {
    configurar_mask()
    armazenar_defaults();
    $(".main-content").fadeOut("swing", function () {
        $(".section-info-change").fadeIn();
    })
}
function armazenar_defaults() {
    let info_values = document.querySelectorAll('.info-change h4');
    info_values.forEach(dado => {
        dados_info.push(dado);
    });
}

$(".form-info").submit(function (e) {
    e.preventDefault();
    let info_values = document.querySelectorAll('.info-change input');
    let nome = info_values[0].value;
    let cep = info_values[1].value;
    let numero = info_values[2].value;
    let telefone = info_values[3].value;
    let email = info_values[4].value;
    $.ajax({

        url: '../php/update_info.php',
        method: 'POST',
        dataType: 'json',
        data: { nome: nome, cep: cep, numero: numero, telefone: telefone, email: email },
        complete: function () {
            let html = '<div class="row justify-content-center no-gutters">' +
                '<div class="info">' +
                '<a class="created-content">Informações atualizadas com sucesso.</a>' +
                '</div>' +
                '</div>';
            $(".sucess-message").empty();
            $(".sucess-message").append(html)
        }
    })
})

