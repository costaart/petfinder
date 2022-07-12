$(document).ready(function(){

    $('#radio-cachorro').click(function(){
        $('#cards-gato').hide();
        $('#cards-cachorro').show();

    });

    $('#radio-gato').click(function(){
        $('#cards-cachorro').hide();
        $('#cards-gato').show();
    });

    $('.imagem-slide').click(function(){
        $('#toggle-animal').click();
    });

    $('#toggle-animal').click(function(){
        let checkbox = document.querySelector("#toggle-animal");

        if(checkbox.checked === true) {
            $('#cards-cachorro').hide();
            $('#cards-gato').show();
        }
        else{
            $('#cards-gato').hide();
            $('#cards-cachorro').show();
        }
    });
});