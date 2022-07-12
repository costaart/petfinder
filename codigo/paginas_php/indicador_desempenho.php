<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/indicador_desempenho.css">
</head>

<body>
    <div class="modal loading">
        <div class="modal-dialog modal-dialog-centered lds-dual-ring"></div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12 section-botoes">
                <ul>
                    <li class="row justify-content-center">
                        <div class="field">
                            <a href="index.php"><img src="imagens/logo_v2.png"></a>
                            <div class="underline"></div>
                        </div>
                    </li>
                    <li class="row justify-content-center">
                        <div class="field">
                            <button class="btn">Quantidade de cachorros e gatos</button>
                        </div>
                    </li>
                    <li class="row justify-content-center">
                        <div class="field">
                            <button class="btn">Quantidade de consultas</button>
                        </div>
                    </li>
                    <li class="row justify-content-center">
                        <div class="field">
                            <button class="btn">Quantidade de voluntários</button>
                        </div>
                    </li>
                    <li class="row justify-content-center">
                        <div class="field">
                            <button class="btn">Quantidade de animais com raça e sem</button>
                        </div>
                    </li>
                    <li class="row justify-content-center">
                        <div class="field">
                            <button class="btn">Quantidade de animais por idade</button>
                            <div class="underline"></div>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="col-lg-8 col-md-12 col-sm-12 section-chart">
                <div class="row">
                    <div class="container container-chart">
                        <canvas id="myChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.3.2/chart.min.js
        "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/indicador_desempenho.js"></script>
</body>