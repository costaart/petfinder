var campos = document.querySelectorAll(".input-field input, select");
$(document).ready(function () {
    $(campos[8]).mask('(00) 00000-0000');
    $(campos[5]).mask('000.000.000-00');
    $(campos[3]).mask('00000-000');
    $(campos[9]).mask('00/00/0000');

})
function voltar(link) {
    $(".container").fadeOut("swing", function () {
        window.location.href = link
    })
}
$('#campos').submit(function (e) {
    e.preventDefault();
    var data = getDataAtual();
    $.ajax({
        type: "POST",
        url: "formularios/cadastro_medico.php",
        dataType: 'json',
        data: {
            nome: campos[0].value, email: campos[1].value, senha: campos[2].value, cep: campos[3].value, numero: campos[4].value,
            cpf: campos[5].value, especialidade: campos[6].value, crmv: campos[7].value, telefone: campos[8].value, data_nascimento: campos[9].value,
            data_cadastro: data
        },
        complete: function (resultado) {
            if (resultado.responseJSON == false) {
                repetir_cadastro();
            } else {
                sucesso_cadastro('../login.php');
            }
        }
    });
});

function repetir_cadastro() {
    $(".field-erro").empty();
    $(".field-erro").append(
        '<div class="row justify-content-center">' +
        '<p style="color:white">CPF ou Email ja cadastrado.</p>' +
        '</div>' +
        '</div>'
    )
}
function sucesso_cadastro(link) {
    $(".container").fadeOut("swing", function () {
        window.location.href = link
    })
}
function getDataAtual() {
    let mesArray = ['01', '02', '03', '04', '05', '06',
        '07', '08', '09', '10', '11', '12']
    var aux = new Date();
    var dia = aux.getDate();
    var mes = aux.getMonth();
    var ano = aux.getFullYear()
    return ano + "-" + (mesArray[mes]) + "-" + dia;
}

function consultar() {
    let cep = campos[3];
    var codigoCep = cep.value                   //atribuindo o valor digitado no campo ao valor

    codigoCep = codigoCep.replace(' ', '')       //remove espaços caso o usuario digite
    codigoCep = codigoCep.replace('.', '')       //remove ponto caso o usuario digite
    codigoCep = codigoCep.replace('-', '')       //remove traço caso o usuario digite
    codigoCep = codigoCep.trim()                //remove espaços no começou ou no fim caso o usuario digite

    axios
        .get('https://viacep.com.br/ws/' + codigoCep + '/json/')          //de acordo com a API dos correios, usa o codigo cep do usuario pra inserir da URL de pesquisa
        .then(function (response) {

            if (response.data.erro) {           //caso não exista o CEP, cria o erro para mostrar
                throw new Error(false)
            }

            $(cep).css({
                "outline": ""
            })

            $(".create-content").empty();
            let html = '<div class="row justify-content-center">' +
                '<div class="input-field">' +
                '<label>Logradouro</label>' +
                `<input type="text" value="${response.data.logradouro}" readonly></input>` +
                '</div>' +
                '</div>';
            $(".create-content").append(html);
            html = '<div class="row justify-content-center">' +
                '<div class="input-field">' +
                '<label>Cidade/Estado</label>' +
                `<input type="text" value="${response.data.localidade}" readonly></input>` +
                '</div>' +
                '</div>';
            $(".create-content").append(html);
            html = '<div class="row justify-content-center">' +
                '<div class="input-field">' +
                '<label>Bairro</label>' +
                `<input type="text" value="${response.data.bairro}" readonly></input>` +
                '</div>' +
                '</div>';
            $(".create-content").fadeIn("swing");

        })
        .catch(function (error) {
            $(cep).css({
                "outline-style": "solid",
                "outline-color": "#cd2f2d"
            })

            $(".create-content").fadeOut("swing", function () {
                $(".create-content").empty();
            })
            cep.value = "cep inválido";
        })
}