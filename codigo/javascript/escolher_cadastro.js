$(document).ready(function () {
    $(".section-escolher-cadastro").fadeIn("swing")
})
function redirecionar (link) {
    $(".section-escolher-cadastro").fadeOut(function () {
        window.location.href = link
    })
}
