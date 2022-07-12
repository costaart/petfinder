<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Meu perfil</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/meu_perfil.css">
    <link rel="shortcut icon" href="imagens/favicon.png">
</head>

<header>
    <section class="section-image">
        <nav class="navbar navbar-image">
            <a class="navbar-brand" href="#">
                <img src="imagens/logo_v2.png" width="120" class="imagem-logo">
            </a>
        </nav>
    </section>

    <section class="section-main">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#">
                <img src="imagens/logo_v4.png" width="150" class="imagem-logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse content-hide" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Tela inicial</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cadastro_animal.php">Cadastrar um animal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Marcar consulta</a>
                    </li>
                </ul>
            </div>
        </nav>
    </section>

</header>

<body>
    <section class="container section-image">
        <!--MODAL CONFIRMAR-FOTO-->
        <div class="modal fade" id="modal_confirmar_foto" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Confirmar foto</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="form-image">
                        <div class="modal-body">
                            <div class="row justify-content-center">
                                <h5>Mudar avatar? </h5>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary btn-modal btn-change-image">Sim</button>
                            <button type="button" class="btn btn-secondary btn-modal" data-dismiss="modal">Não</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--MODAL CONFIRMAR-FOTO-->
        <div class="row">
            <div class="col-lg-8 col-sm-12">
                <div class="row body-image-field">
                    <button class="btn" onclick="esconder_conteudo()">
                        <span><img src="imagens/left-arrow.png" width="30" class=""></span>
                    </button>
                    <h1>Escolha uma imagem: </h1>
                </div>
                <div class="row body-image-field">
                    <h1>Gato</h1>
                </div>
            </div>
            <div class="col-12">
                <div class="row justify-content-center body-image-field">
                    <button class="image-btn" style="background-image: url(imagens/gato1.jpg);"></button>
                    <button class="image-btn" style="background-image: url(imagens/gato2-cortado.jpg);"></button>
                    <button class="image-btn" style="background-image: url(imagens/gato3-cortado.jpg);"></button>
                    <button class="image-btn" style="background-image: url(imagens/gato4.jpg);"></button>
                    <button class="image-btn" style="background-image: url(imagens/gato5.jpg);"></button>
                    <button class="image-btn" style="background-image: url(imagens/gato6.jpg);"></button>
                </div>
                <div class="row body-image-field">
                    <h1>Cachorro</h1>
                </div>
                <div class="row justify-content-center body-image-field">
                    <button class="image-btn" style="background-image: url(imagens/cachorro-1.jpg);"></button>
                    <button class="image-btn" style="background-image: url(imagens/cachorro2.jpg);"></button>
                    <button class="image-btn" style="background-image: url(imagens/cachorro3-cortado.jpg);"></button>
                    <button class="image-btn" style="background-image: url(imagens/cachorro4-cortado.jpg);"></button>
                    <button class="image-btn" style="background-image: url(imagens/cachorro5-cortado.jpg);"></button>
                    <button class="image-btn" style="background-image: url(imagens/cachorro6-cortado.jpg);"></button>
                </div>
            </div>
        </div>
    </section>
    <section class="container-fluid section-main">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 section-usuario">
                <div class="row justify-content-center">
                    <div class="body-field">
                        <input type="file" name="imagem_cliente" id="input_file">
                        <div class="user-image-field">
                            <img src="<?php
                                        session_start();
                                        echo $_SESSION['foto_perfil'];
                                        ?>" width="200" height="200" class="imagem user-image" onclick="carregar_tela_imagem()">
                        </div>
                        <h3 class="image-text" onclick="carregar_tela_imagem()">Alterar foto</h3>
                    </div>
                </div>
                <form class="formulario form-info">
                    <?php
                    $nome = $_SESSION["nome"];
                    $cep = $_SESSION["cep"];
                    $num_residencia = $_SESSION["num_residencia"];
                    $telefone = $_SESSION["telefone"];
                    $email = $_SESSION["email"];
                    $senha = $_SESSION["senha"];
                    $tipo_usuario = $_SESSION['tipo_usuario'];
                    ?>
                    <div class="row justify-content-center main-content info">
                        <?php echo "<h4>$nome</h4>" ?>
                    </div>
                    <div class="container section-info-change">
                        <div class="col">
                            <div class="row justify-content-center no-gutters">
                                <div class="info">
                                    <h3>Nome</h3>
                                </div>
                            </div>
                            <div class="row justify-content-center no-gutters">
                                <div class="info info-change">
                                    <input type="text" name="info-nome" class="info-field" placeholder="<?php echo $nome ?>" value="<?php echo $nome ?>" required readonly>
                                </div>
                            </div>
                            <?php
                            switch ($tipo_usuario) {
                                case 'Voluntario':
                                    $crmv = $_SESSION['crmv'];
                                    $especialidade = $_SESSION['especialidade'];
                                    $cpf = $_SESSION['cpf'];
                                    echo '<div class="row justify-content-center no-gutters">
                                    <div class="info">
                                        <h3>CRMV</h3>
                                    </div>
                                    </div>';
                                    echo "<div class='row justify-content-center no-gutters'>
                                     <div class='info info-view'>
                                    <input type='text' name='info-crmv' class='info-field' value='$crmv' required readonly>
                                    </div>
                                    </div>";
                                    echo '<div class="row justify-content-center no-gutters">
                                    <div class="info">
                                        <h3>CPF</h3>
                                    </div>
                                    </div>';
                                    echo "<div class='row justify-content-center no-gutters'>
                                     <div class='info info-view'>
                                    <input type='text' name='info-cpf' class='info-field' value='$cpf' required readonly>
                                    </div>
                                    </div>";
                                    echo '<div class="row justify-content-center no-gutters">
                                    <div class="info">
                                        <h3>Data de Nascimento</h3>
                                    </div>
                                    </div>';
                                    echo "<div class='row justify-content-center no-gutters'>
                                     <div class='info info-view'>
                                    <input type='text' name='info-data_nasicmento' class='info-field' value='{$_SESSION['data_nascimento']}' required readonly>
                                    </div>
                                    </div>";
                                    echo '<div class="row justify-content-center no-gutters">
                                    <div class="info">
                                        <h3>Especialidade</h3>
                                    </div>
                                    </div>';
                                    echo "<div class='row justify-content-center no-gutters'>
                                     <div class='info info-view'>
                                    <input type='text' name='info-especialidade' class='info-field' value='$especialidade' required readonly>
                                    </div>
                                    </div>";
                                    break;
                                case 'Abrigo':
                                    $cpnj = $_SESSION['cnpj'];
                                    $tipo_abrigo = $_SESSION['tipo_abrigo'];
                                    echo '<div class="row justify-content-center no-gutters">
                                    <div class="info">
                                        <h3>CNPJ</h3>
                                    </div>
                                    </div>';
                                    echo "<div class='row justify-content-center no-gutters'>
                                     <div class='info info-view'>
                                    <input type='text' name='info-cnpj' class='info-field' value='$cnpj' required readonly>
                                    </div>
                                    </div>";
                                    echo '<div class="row justify-content-center no-gutters">
                                    <div class="info">
                                        <h3>Tipo de abrigo</h3>
                                    </div>
                                    </div>';
                                    echo "<div class='row justify-content-center no-gutters'>
                                     <div class='info info-view'>
                                    <input type='text' name='info-tipoAbrigo' class='info-field' value='$tipo_abrigo' required readonly>
                                    </div>
                                    </div>";
                                    break;
                                case 'Pessoa':
                                    $cpf = $_SESSION['cpf'];
                                    echo '<div class="row justify-content-center no-gutters">
                                        <div class="info">
                                            <h3>CPF</h3>
                                        </div>
                                        </div>';
                                    echo "<div class='row justify-content-center no-gutters'>
                                         <div class='info info-view'>
                                        <input type='text' name='info-cnpj' class='info-field' value='$cpf' required readonly>
                                        </div>
                                        </div>";
                                    echo '<div class="row justify-content-center no-gutters">
                                        <div class="info">
                                            <h3>Data de nascimento</h3>
                                        </div>
                                        </div>';
                                    echo "<div class='row justify-content-center no-gutters'>
                                         <div class='info info-view'>
                                        <input type='text' name='info-tipoAbrigo' class='info-field' value='{$_SESSION['data_nascimento']}' required readonly>
                                        </div>
                                        </div>";
                                    break;
                            }
                            ?>
                            <div class="row justify-content-center no-gutters">
                                <div class="info">
                                    <h3>CEP</h3>
                                </div>
                            </div>
                            <div class="row justify-content-center no-gutters">
                                <div class="info info-change">
                                    <input type="text" name="info-cep" class="info-field" value="<?php echo $cep ?>" minlength="8" required>
                                </div>
                            </div>
                            <div class="row justify-content-center no-gutters">
                                <div class="info">
                                    <h3>Número</h3>
                                </div>
                            </div>
                            <div class="row justify-content-center no-gutters">
                                <div class="info info-change">
                                    <input type="text" name="info-num" class="info-field" value="<?php echo $num_residencia ?>" required>
                                </div>
                            </div>
                            <div class="row justify-content-center no-gutters">
                                <div class="info">
                                    <h3>Telefone</h3>
                                </div>
                            </div>
                            <div class="row justify-content-center no-gutters">
                                <div class="info info-change">
                                    <input type="text" name="info-tel" class="info-field" value="<?php echo $telefone ?>" minlength="15" required>
                                </div>
                            </div>
                            <div class="row justify-content-center no-gutters">
                                <div class="info">
                                    <h3>Email</h3>
                                </div>
                            </div>
                            <div class="row justify-content-center no-gutters">
                                <div class="info info-change">
                                    <input type="text" name="info-email" class="info-field" value="<?php echo $email ?>" required>
                                </div>
                            </div>
                            <div class="sucess-message"></div>
                            <div class="row justify-content-center no-gutters">
                                <div class="info">
                                    <button class="section-info-btn">Salvar</button>
                                </div>
                                <div class="info">
                                    <input type="button" class="section-info-btn" onclick="esconder_editar_info()" value="Sair">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="row justify-content-center main-content info">
                    <button class="section-info-btn" onclick="abrir_editor_info()">Editar informações</button>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 section-animais">
                <div class="row justify-content-center">
                    <div class="field-title">
                        <h1>Animais cadastrados</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="row justify-content-center">
                            <?php
                            include("conexao-pdo.php");

                            if (isset($_SESSION['cnpj'])) {                 
                                $chave = $_SESSION['cnpj'];
                            }else {
                                $chave = $_SESSION['cpf'];
                            };

                            $data = $conexao->prepare("SELECT * FROM db_animal WHERE chave_usuario IN ('$chave')");
                            $data->execute();
                            $result = $data->fetchAll();
                            $linhas_count = $data->rowCount();

                            for ($i = 0; $i < $linhas_count; $i++) {
                                $img = $result[$i]['foto_animal'];
                                $nome = $result[$i]['nome_animal'];
                                $sexo = $result[$i]['sexo'];
                                $porte = $result[$i]['porte'];
                                $raca = $result[$i]['raça'];
                                echo "<div class='card border-light card-animal'>
                                <img src='formularios/imagens_clientes/$img' class='card-img-top'>
                                <div class='card-body'>
                                    <h5 class='card-title'>$nome</h5>
                                    <span class='raca card-text'>$raca</span>
                                    <p class='card-text'>Belo Horizonte - MG</p>
                                    <span class='porte' title='Pequeno Porte'>";
                                switch ($porte) {
                                    case 'Pequeno':
                                        echo "
                                            <span class='badge rounded-pill bg-light' id='porte-p' style='background-color: #d56756 !important' >P</span>
                                            <span class='badge rounded-pill bg-light' id='porte-p'>M</span>
                                            <span class='badge rounded-pill bg-light' id='porte-p'>G</span>
                                            ";
                                        break;
                                    case 'Medio':
                                        echo "
                                            <span class='badge rounded-pill bg-light' id='porte-p'>P</span>
                                            <span class='badge rounded-pill bg-light' id='porte-p' style='background-color: #d56756 !important' >M</span>
                                            <span class='badge rounded-pill bg-light' id='porte-p'>G</span>
                                            ";
                                        break;
                                    case 'Grande':
                                        echo "
                                            <span class='badge rounded-pill bg-light' id='porte-p'>P</span>
                                            <span class='badge rounded-pill bg-light' id='porte-p'>M</span>
                                            <span class='badge rounded-pill bg-light' id='porte-p' style='background-color: #d56756 !important' >G</span>";
                                        break;
                                };
                                echo "</span>
                                <img src='imagens/";
                                if ($sexo == 'Femea')
                                    echo "femea-icon.png' class='sexo-animal col' alt='' title='Fêmea' srcset=''>
                                    </div>
                                    </div>";
                                else
                                    echo "macho-icon.png' class='sexo-animal col' alt='' title='Fêmea' srcset=''>
                                    </div>
                                    </div>";
                            };
                            mysqli_close($conexao);
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/jQuery/jquery.mask.min.js"></script>
    <script src="js/meu_perfil.js"></script>
</body>

</html>
