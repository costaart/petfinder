$(document).ready(function (){
    $('#outrasOpcoes').hide();

    var selectCidade = document.getElementById('localizacao');
    selectCidade.addEventListener('change', function() {
        mostrarOpcoes();
    });

});

function mostrarOpcoes(){
    $('#outrasOpcoes').show();
}