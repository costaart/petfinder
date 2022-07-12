<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/login.css">

</head>

<body>
    <div class="modal" tabindex="-1" role="dialog" aria-labelledby="..." aria-hidden="true" id="modal-loader">
        <div class="modal-dialog loader" role="document"></div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <main class="col-xl-4 col-lg-5 col-md-7 col-sm-9 col-10" id="formulario-field">
                <div class="row justify-content-center">
                    <img src="imagens/logo_v3_min.png" id="logo">
                </div>
                <div class="row">
                    <div class="col-6">
                        <h3>Login</h3>
                    </div>
                    <div class="col-6"></div>
                </div>
                <form id="formulario">
                    <div class="row justify-content-center input-field">
                        <input type="email" name="email" class="form-control-lg campos" placeholder="Digite seu email: " id="campoEmail" required>
                    </div>
                    <div class="row justify-content-center input-field">
                        <input type="password" name="senha" class="form-control-lg campos" placeholder="Digite sua senha: " id="campoSenha" required>
                    </div>
                    <div class="error-field"></div>
                    <div class="row justify-content-center">
                        <div class="col">
                            <a href="" class="badge badge-primary" id="botaoSenha" onclick="enviarEmail()">Esqueceu sua
                                senha? </a>
                            <a href="TELA DE CADASTRO/cadastro_usuario_abrigo.html" class="badge badge-primary" id="botaoCadastrar">Cadastrar-se</a>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <input type="submit" class="btn" value="Entrar" id="botaoEntrar">
                    </div>
                </form>
            </main>
        </div>
    </div>
    <script src="js/jQuery/jquery-3.5.1.min.js"></script>
    <script src="js/login.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>