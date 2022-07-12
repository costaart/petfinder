<?php
//CONNECTION 
require_once 'loginConection.php';
//SESSON
session_start();
//BUTTON SUBMIT
if (isset($_POST['botaoSubmit'])):
  
   $error = array();
    $login = mysqli_escape_string($connect, $_POST['login']);
    $password = mysqli_escape_string($connect, $_POST['password']);

    if (empty($login ) or empty($password)):
        $error[]= "<script> window.alert(' Falta preencher os dados') </script>";  

        else : 
            $sql= "SELECT email FROM db_pessoa WHERE email = '$login'";
            
            $result = mysqli_query($connect,$sql);


            if (mysqli_num_rows ($result) > 0 ):
               
                $sql= "SELECT * FROM db_pessoa WHERE email = '$login' AND senha ='$password'";
                $result = mysqli_query($connect,$sql);

                if (mysqli_num_rows ($result) == 1  ):
                    $dados = mysqli_fetch_array($result);
                    mysqli_close($connect);
                    $_SESSION['logado'] = true;
                    $_SESSION['id_usuario']  = $dados['id'];
                    header('Location: inicio.html');
               
                else: 
                    $error[] = "<script> window.alert(' Usuario e senha não conferem') </script>";

                endif;
            
        else:
            $error[] = "<script> window.alert(' Usuario inexistente') </script>";
        endif;
    endif;

endif;  

?>

<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/PetFinder-master/codigo/css/login.css">

</head>

<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-4 col-lg-5 col-md-7 col-sm-9 col-9" id="formulario">
                <div class="row justify-content-center">
                    <img src="/PetFinder-master/codigo/imagens/logo_v3.png" id="logo">
                </div>
                <div class="row">
                    <div class="col-6">
                        <h3>Login</h3>
                    </div>
                    <div class="col-6"></div>
                </div>
                <?php
                if (!empty($error)):
                    foreach ($error as $erro):
                      echo $erro;
                    endforeach;
                endif;
                ?>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                    <div class="row justify-content-center">
                        <input type="text" name="login" class="form-control-lg campos" placeholder="Digite seu email: ">
                    </div>
                    <div class="row justify-content-center">
                        <input type="password" name="password" class="form-control-lg campos"
                            placeholder="Digite sua senha: " id="senha">
                    </div>
                <div class="row justify-content-center">
                    <div class="col">
                        <a href="" class="badge badge-primary" id="botaoSenha" onclick="">Esqueceu sua
                            senha? </a>
                        <a href="   cadastro_usuario_abrigo.html" class="badge badge-primary"
                            id="botaoCadastrar">Cadastrar-se</a>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <button type="submit" class="btn btn-danger" name="botaoSubmit">Login </button>
                </div>
                </div>
        </div>
    </div>
         </form>     
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
        crossorigin="anonymous"></script>
        
</body>
</html>