<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/cadastro_usuario.css">

</head>
<div class="container">

    <body>

    <div class="modal" tabindex="-1" role="dialog" aria-labelledby="..." aria-hidden="true" id="modal-loader">
        <div class="modal-dialog loader" role="document"></div>
    </div>
    
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 section-input">
                <div class="row">
                    <button class="btn" onclick="redirecionar('escolher_cadastro.php')">
                        <span><img src="imagens/left-arrow.png" width="30" class=""></span>
                    </button>
                </div>
                <div class="row justify-content-center">
                    <img src="imagens/logo_v2.png" id="logo">
                </div>
                <div class="row justify-content-center input-title">
                    <h1>Cadastro de usuário</h1>
                </div>
                <form id="campos">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 input-column-1">
                            <div class="row justify-content-center">
                                <div class="input-field">
                                    <label>Nome</label>
                                    <input type="text" placeholder="Digite seu nome: " required>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="input-field">
                                    <label>Email</label>
                                    <input type="email" placeholder="seuemail@email.com" required>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="input-field">
                                    <label>Senha</label>
                                    <input type="password" placeholder="Digite sua senha: " required>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="input-field">
                                    <label>CEP</label>
                                    <input type="text" placeholder="Digite seu CEP: " required>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="input-field">
                                    <label>Número</label>
                                    <input type="text" placeholder="Digite seu número: " required>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <input type="button" onclick="consultar()" class="btn" value="Consultar">
                            </div>
                            <div class="create-content"></div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 input-column-2">
                            <div class="row justify-content-center">
                                <div class="input-field">
                                    <label>CPF</label>
                                    <input type="text" placeholder="Digite seu CPF: " required>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="input-field">
                                    <label>Telefone</label>
                                    <input type="tel" placeholder="(xx) xxxxx-xxxx" required>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="input-field">
                                    <label>Data de Nascimento</label>
                                    <input type="text" placeholder="dd/mm/aa" required>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <input type="submit" value="Cadastrar" class="btn">
                            </div>
                            <div class="field-erro">
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12">
                <img src="imagens/mulher-com-gatinho.jpg" id="fotoColuna2">
            </div>
            <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
            <script src="js/jQuery/jquery.mask.min.js"></script>
            <script src="js/cadastro_usuario.js"></script>

    </body>


</html>