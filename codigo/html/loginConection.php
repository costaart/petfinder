<?php
$servername = "localhost";
$username="root";
$password = "";
$db_name="pet_finder";

$connect = mysqli_connect($servername,$username,$password,$db_name);

if (mysqli_connect_error ()):

    echo "falha na conexão".mysqli_connect_error();
endif;






































/*
session_start();
$pdo = new PDO('mysql:host=localhost;dbname=pet_finder;charset=utf8', "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$username = $_POST['username'];
$password = $_POST['password'];
$conexao = mysql_connect())
$consulta = $pdo -> prepare("select * from usuario where email=? and senha=?")
$consulta->bindParam(1, $_POST['email'], PDO::PARAM_STR);
$consulta->bindParam(2, $_POST['senha'], PDO::PARAM_STR);

$consulta->execute();
$linha = $consulta->fetch(PDO::FETCH_ASSOC); 

$email= $linha['email'];
$senha = $linha ['senha'];


$pdo =  null;

if ( $_POST['email'] == $email && $_POST['senha'] == $senha && $email !="" && $senha !="" ){
    $_SESSION['logado'] = 'SIM';
    $_SESSION['horarioLogin'] = time();
    echo "<script>window.location.replace('http://localhost/PetFinder-master/codigo/html/inicio.html');</script>";
    $_SESSION['login'] = $_POST['login'];
   }
    
    else{
    echo "<script>alert('Email ou senha incorreto!')</script>";
    echo "<script>window.location.replace('http://localhost/PetFinder-master/codigo/html/login.php');</script>";
    header("Cache-Control: no-cache, must-revalidate");
    header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); 
   }
        
*/


?>
