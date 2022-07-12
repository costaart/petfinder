var ctx = document.getElementById("myChart").getContext('2d');
var botoes = document.querySelectorAll(".btn");
var qnt_gato;
var qnt_cachorro;
var meses = ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro']
$(document).ready(function () {

})
function get_dados(tipo_dado) {
    var resposta;
    $(".loading").modal("show")
    $.ajax({
        url: '../php/dados_graficos.php',
        type: 'POST',
        dataType: "JSON",
        async: false,
        data: {
            tipo_dado: tipo_dado
        },
        complete: function (resp) {
            $(".loading").modal("hide")
            resposta = resp.responseJSON;
        }
    })
    return resposta;
}
$(botoes[0]).click(function () {
    let options = {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            legend: {
                labels: {
                    color: 'black'
                }
            }
        }
    }
    grafico_quantidade.options = options;
    changeChartType(grafico_quantidade, 'pie');
    chartClear(grafico_quantidade);
    let aux = get_dados('tipo_animais');
    let qnt_cachorro = aux[1][0];
    let qnt_gato = aux[0][0];
    addData(grafico_quantidade, 'Cachorro', qnt_cachorro)
    addData(grafico_quantidade, 'Gato', qnt_gato)
})
function armazenarDadosMes(dadosBd) {
    let qnt_vol_mes = {};
    let dados = [];
    for (let i = 0; i < dadosBd.length; i++) {
        dados[i] = qnt_vol_mes = {
            mes: meses[(dadosBd[i][1] - 1)],
            quantidade: dadosBd[i][0]
        }
    }
    return dados;
}
$(botoes[2]).click(function () {
    let options = {
        responsive: true,
        maintainAspectRatio: false,
        scales: {
            y: {
                ticks: {
                    stepSize: 1
                }
            }
        },
        plugins: {
            legend: {
                labels: {
                    color: 'black'
                }
            }
        }
    }
    grafico_quantidade.options = options;
    let dados = armazenarDadosMes(get_dados('quantidade_voluntario')) 
    grafico_quantidade.data.datasets[0].label = 'Voluntários';
    changeChartType(grafico_quantidade, 'line')
    chartClear(grafico_quantidade);
    dados.forEach(dadoMes => {
        addData(grafico_quantidade, dadoMes.mes, dadoMes.quantidade)
    });
})
$(botoes[3]).click(function () {
    let options = {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            legend: {
                labels: {
                    color: 'black'
                }
            }
        }
    }
    grafico_quantidade.options = options;
    let dados = get_dados('raca');
    let qnt_semRaca = dados[1][0];
    let qnt_comRaca = dados[0][0];
    grafico_quantidade.data.datasets[0].label = 'Quantidade';
    changeChartType(grafico_quantidade, 'pie')
    chartClear(grafico_quantidade);
    addData(grafico_quantidade, 'Com raça', qnt_comRaca)
    addData(grafico_quantidade, 'Sem raça', qnt_semRaca)

})
$(botoes[4]).click(function () {
    let dados = get_dados('idade');
    let options = {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            legend: {
                labels: {
                    color: 'black'
                }
            }
        }
    }
    grafico_quantidade.options = options;
    chartClear(grafico_quantidade);
    changeChartType(grafico_quantidade, 'polarArea');
    addData(grafico_quantidade, dados[0][1], dados[0][0]);
    addData(grafico_quantidade, dados[1][1], dados[1][0]);
    addData(grafico_quantidade, dados[2][1], dados[2][0]);
    addData(grafico_quantidade, dados[3][1], dados[3][0]);

})

function changeChartType(chart, type) {
    chart.config.type = type;
}

function chartClear(chart) {
    let qnt_data = chart.data.datasets[0].data.length;
    for (let i = 0; i < qnt_data; i++) {
        removeData(chart);
    }
}
function addData(chart, label, data) {
    chart.data.labels.push(label);
    chart.data.datasets.forEach((dataset) => {
        dataset.data.push(data);
    });
    chart.update();
}

function removeData(chart) {
    chart.data.labels.pop();
    chart.data.datasets.forEach((dataset) => {
        dataset.data.pop();
    });
    chart.update();
}

var grafico_quantidade = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: [],
        datasets: [{
            label: 'Quantidade',
            data: [],
            backgroundColor: [
                '#0C54F2',
                '#DB0008',
                'orange',
                'yellow'
            ],
            borderColor: [
                '#0C54F2',
                '#DB0008',
                'orange',
                'yellow'
            ],
            borderWidth: 1
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            legend: {
                labels: {
                    color: 'black'
                }
            }
        }
    },
},
)