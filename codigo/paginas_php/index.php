<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Adotar um Animal - PetFinder</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/inicio.css">
</head>

<body>
  <!--Modal-Adotar-->
  <div class="modal modal-cadastro" tabindex="-1" role="dialog" id="modalAdotar">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Adotar animal</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row justify-content-center">
            <div class="modal-body-field">
              Entre em contato com o telefone indicado no card.
            </div>
            </div>
        </div>
        <div class="modal-footer">
        <h6 style="font-size: 16px">
              O grupo PetFinder é extremamente grato por sua ação! 
            </h6>
            <button type="button" class="btn btn-secondary" data-dismiss="modal" style="background-color:#d56756; color: white">Fechar</button>
        </div>
      </div>
    </div>
  </div>
  <!--Modal-Adotar-->

  <!--Navbar-->
  <nav class="navbar navbar-light navbar-expand-lg">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="container">
      <nav class="navbar">
        <div class="container">
          <a class="logo" href="#">
            <img src="imagens/logo_v4.png" alt="" width="120">
          </a>
        </div>
      </nav>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <?php
          session_start();
          if (isset($_SESSION['nome'])) {
            echo '<li class="nav-item">
            <a class="nav-link" href="cadastro_animal.php">Cadastrar Animal</a>
          </li>';
          }
          ?>
          <li class="nav-item">
            <a class="nav-link" href="marcar_consulta.php">Marcar Consulta</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="indicador_desempenho.php">Indicadores de desempenho</a>
          </li>
        </ul>
        <?php
        if (isset($_SESSION['nome'])) {
          $img = $_SESSION['foto_perfil'];
          echo "<section class='loged-content'>
          <li class='nav-item dropdown'>
          <a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
          <img id='user-icon-menu' src='$img' alt='Usuário' width='60' height='60'>
          </a>
          <div class='dropdown-menu' aria-labelledby='navbarDropdown'>
            <a class='dropdown-item' href='meu_perfil.php'>Meu perfil</a>
            <a class='dropdown-item' href='php/loggout.php'>Sair</a>
          </div>
        </li>
          </section>";
        } else {
          echo '<section class="unlogged-content">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="escolher_cadastro.php">Cadastrar-se</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.php">Fazer login</a>
              </li>
            </ul>
          </section>';
        }
        ?>
      </div>
    </div>
  </nav>

  <!--Título da página-->
  <div class="container">
    <h3 class="titulo">Adotar um animal</h3>
  </div>

  <!--Escolha do tipo de animal-->
  <div class="filtros container">
    <div class="filtro-tipo">
      <p>Tipo de animal:</p>
      <div class="container col order-1" id="tipo-animal">
        <label class="switch">
          <input type="checkbox" id="toggle-animal">
          <span class="slider round"></span>
        </label>
        <img src="imagens/dog-icon.png" class="imagem-slide" alt="" srcset="">
        <img src="imagens/cat-icon.png" class="imagem-slide" alt="" srcset="">
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <?php

      include("conexao-pdo.php");
      $data = $conexao->prepare("SELECT * FROM db_animal");
      $data->execute();
      $result = $data->fetchAll();
      $linhas_count = $data->rowCount();

      for ($i = 0; $i < $linhas_count; $i++) {
        $img = $result[$i]['foto_animal'];
        $nome = $result[$i]['nome_animal'];
        $sexo = $result[$i]['sexo'];
        $porte = $result[$i]['porte'];
        $tipo_animal = strtolower($result[$i]['tipo_animal']);
        $raca = $result[$i]['raça'];
        $cont_resp = $result[$i]['contato_resp'];
        echo "<div class='card border-light card-animal $tipo_animal'>
    <div class='card-img-top' style='background-image: url(formularios/imagens_clientes/$img)'></div>
    <div class='card-body'>
        <h5 class='card-title'>$nome</h5>
        <span class='raca card-text'>$raca</span>
        <p class='card-text'>$cont_resp</p>
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
        </div>";
        else
          echo "macho-icon.png' class='sexo-animal col' alt='' title='Fêmea' srcset=''>
        </div>";

        echo "<button class='card-button'data-toggle='modal' data-target='#modalAdotar'>Adotar</button> 
        </div>
        ";
      };
      mysqli_close($conexao);
      ?>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="/js/inicio.js"></script>
</body>

</html>