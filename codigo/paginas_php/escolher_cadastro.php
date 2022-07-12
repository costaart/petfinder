<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/escolher_cadastro.css">

</head>

<body>
    <section class="section-escolher-cadastro">
        <div class="col-12">
            <div class="row justify-content-center">
                <div class="field">
                    <img src="imagens/logo_v3.png" alt="" onclick="redirecionar('index.php')">
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="field">
                    <h1>Se cadastrar como: </h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="field">
                    <div class="col">
                        <button class="btn" onclick="redirecionar('cadastro_medico.php')">Voluntário</button>
                    </div>
                </div>
                <div class="field">
                    <div class="col">
                        <button class="btn" onclick="redirecionar('cadastro_usuario.php')">Usuário</button>
                    </div>
                </div>
                <div class="field">
                    <div class="col">
                        <button class="btn" onclick="redirecionar('cadastro_abrigo.php')">Abrigo</button>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/jQuery/jquery.mask.min.js"></script>
    <script src="js/escolher_cadastro.js"></script>
</body>

</html>
