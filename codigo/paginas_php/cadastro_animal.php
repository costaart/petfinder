<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/cadastro_animal.css">
    <link rel="shortcut icon" href="imagens/favicon.png">
</head>


<body>
    <style>
        .container-left {
            background-image: url(imagens/background-foto.png);
            background-repeat: no-repeat;
            background-size: cover;
        }

        body {
            background: rgb(158, 60, 58);
            background: linear-gradient(90deg, #742d2a 60%, rgba(163, 77, 65, 1) 100%);
        }
    </style>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-12 container-left">
                <div class="input-field-logo">
                    <div class="row justify-content-center">
                        <a href="teste.php"><img src="imagens/logo_v2.png" id="logo"></a>
                    </div>
                    <div class="row">
                        <div class="underline-logo"></div>
                    </div>
                </div>
                <div class="input-field-logo">
                    <div class="row justify-content-center">
                        <h2>Cadastro de animal</h2>
                    </div>
                </div>
                <form class="row formulario" method="POST" enctype="multipart/form-data" action="formularios/cadastro_animal.php">
                    <div class="col-lg-6 col-sm-12">
                        <div class="input-field">
                            <div class="row"><label>Nome: </label></div>
                            <div class="row">
                                <input type="text" name="nome" id="campo_nome_animal" class="form-control campos" placeholder="Digite o nome do animal: " required>
                            </div>
                        </div>
                        <div class="input-field">
                            <div class="row"><label>Descri????o: </label></div>
                            <div class="row">
                                <textarea name="descricao" cols="19" rows="2" placeholder="Digite a descri????o do animal: "></textarea>
                            </div>
                        </div>
                        <div class="input-field">
                            <div class="row"> <label>Tipo de animal: </label></div>
                            <div class="row">
                                <select name="tipo_animal">
                                    <option value="Gato">Gato</option>
                                    <option value="Cachorro">Cachorro</option>
                                </select>
                            </div>
                        </div>
                        <div class="input-field">
                            <div class="row"><label>Idade: </label></div>
                            <div class="row">
                                <select name="idade">
                                    <option value="Abaixo de 1 ano">Abaixo de 1 ano</option>
                                    <option value="Acima de 1 ano">Acima de 1 ano</option>
                                    <option value="Acima de 5 anos">Acima de 5 anos</option>
                                    <option value="Acima de 10 anos">Acima de 10 anos</option>
                                </select>
                            </div>
                        </div>
                        <div class="input-field">
                            <div class="row"><label>Sexo: </label></div>
                            <div class="row">
                                <select name="sexo">
                                    <option value="Macho">Macho</option>
                                    <option value="Femea">F??mea</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="input-field">
                            <div class="row"><label>Foto: </label></div>
                            <div class="row">
                                <label for="campo_foto_animal" id="label_foto_animal">Selecionar foto: </label>
                                <input type="file" name="foto" id="campo_foto_animal" class="campos" i>
                            </div>
                        </div>
                        <div class="input-field">
                            <div class="row"><label>Informa????es m??dicas: </label></div>
                            <div class="row">
                                <input type="text" name="info_medicas" id="campo_info_animal" class="campos" placeholder="Digite as informa????es do animal: ">
                            </div>
                        </div>
                        <div class="input-field">
                            <div class="row"><label>Contato respons??vel: </label></div>
                            <div class="row">
                                <input type="tel" name="contato_resp" id="campo_contato_animal" class="campos" placeholder="Digite o n??mero de celular: " maxlength="11">
                            </div>
                        </div>
                        <div class="input-field">
                            <div class="row"><label>Ra??a: </label></div>
                            <div class="row">
                                <select name="raca">
                                    <option value="Sem ra??a definida">Sem Ra??a Definida</option>
                                    <option value="Poodle">Poodle</option>
                                    <option value="Pinscher">Pinscher</option>
                                    <option value="Yorkshire">Yorkshire</option>
                                    <option value="Shih Tzu">Shih Tzu</option>
                                    <option value="Gato Persa">Gato Persa</option>
                                    <option value="Gato Siam??s">Gato Siam??s</option>
                                    <option value="Maine Coon">Maine Coon</option>
                                    <option value="Outro">Outro</option>
                                </select>
                            </div>
                        </div>
                        <div class="input-field">
                            <div class="row"><label>Porte: </label></div>
                            <div class="row">
                                <select name="porte">
                                    <option value="Pequeno">Pequeno</option>
                                    <option value="Medio">M??dio</option>
                                    <option value="Grande">Grande</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row justify-content-center input-field-btn"><input type="submit" value="Cadastrar" class="btn"></div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6 container-right">
                <img src="imagens/kevin-turcios-rls2bfqYh8E-unsplash.jpg">
            </div>
        </div>
    </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/cadastro_animal.js"></script>
    <script src="js/jQuery/jquery.mask.min.js"></script>
</body>

</html>