<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js
    "></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/PetFinder-master/codigo/css/cadastro_usuario_abrigo.css">

</head>
<div class="container">
    <header>

    </header>

    <body>

        <!-- Modal de cadastro-->
        <div class="modal" tabindex="-1" role="dialog" id="modalCadastro">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">PetFinder</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Cadastro bem sucedido!</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12" id="coluna1">
                <div class="row justify-content-center">
                    <img src="/PetFinder-master/codigo/imagens/logo_v1.png" id="logo">
                </div>
                <div class="row" id="cadastroTitulo">
                    <h1>Cadastro</h1>
                </div>
                <div class="row">
                    <h3>Você é um: </h3>
                </div>
                <div class="row">
                    <nav class="navbar navbar-expand-lg navbar-light" id="navBarSwitch" style="background-color: #d56756;">
                        <a class="navbar-brand" href="#">
                            <img src="/PetFinder-master/codigo/imagens/pawn.png" width="30" height="30" alt="">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                            <div class="row">
                                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                                    <li class="nav-item active">
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="botaoUsuario" name="customRadioInline1" class="custom-control-input" onclick="botaoClicado()">
                                            <label class="custom-control-label" for="botaoUsuario">Usuário</label>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="botaoAbrigo" name="customRadioInline1" class="custom-control-input" onclick="botaoClicado()">
                                            <label class="custom-control-label" for="botaoAbrigo">Abrigo</label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12" id="coluna-1-1">
                        <form action="cadastrarAbrigo.php" method= "POST">
                            <div class="row" name="camposAbrigo"> <label class="textoCampos">CNPJ</label> <input type="text" class="camposCadastro" id="campoCNPJ" name="campoCNPJ" placeholder="CNPJ do abrigo" required> </div>
                            <div class="row" name="camposAbrigo"> <label class="textoCampos">Tipo de Abrigo</label>
                                <select class="form-control" id="tipoAbrigo" name="modality">
                                    <option>Selecione o tipo de abrigo:</option>
                                    <option value="1">Apenas cachorros</option>
                                    <option value="2">Apenas gatos</option>
                                    <option value="3">Gatos e Cachorros</option>
                                </select>
                            </div>
                            <div class="row"> <label class="textoCampos">Nome</label> <input type="text" class="camposCadastro" id="campoNome" placeholder="Seu nome" required> </div>
                            <div class="row"> <label class="textoCampos">Email</label> <input type="email" class="camposCadastro" id="campoEmail" placeholder="seuemail@email.com" required> </div>
                            <div class="row"> <label class="textoCampos">Senha</label> <input type="password" class="camposCadastro" id="campoSenha" placeholder="Sua senha" required> </div>
                            <div class="row"> <label class="textoCampos">Telefone</label> <input type="tel" class="camposCadastro" id="campoTel" placeholder="(xx)xxxxx-xxxx" on required> </div>
                            <div class="row"> <label class="textoCampos">CEP</label> <input type="text" class="camposCadastro" placeholder="Seu CEP" id="inputCep" required> </div>
                            <div class="row"> <input type="button" class="camposCadastro" value="Consultar" id="botaoConsultar" required></div>
                            <div id="criarElementos">
                                <div class="row" id="row1"></div>
                                <div class="row" id="row2"></div>
                                <div class="row" id="row3"></div>
                            </div>
                            <div class="row"> <input type="submit" class="camposCadastro" value="Cadastrar" id="botaoCadastrar"></div>
                        </form>
                    </div>
                </div>

            <div class="col-lg-6 col-md-6 col-sm-12">
                <img src="/PetFinder-master/codigo/imagens/foto_coluna.jpeg" id="fotoColuna2">
            </div>
        </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js%22%3E"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="script cadastro_usuario_abrigo.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>

<footer>

</footer>

</html>