<?php
session_start();
include ("loginConection.php");

$cnpj = mysqli_real_escape_string($connect,trim($_POST['campoCNPJ']));
$tipo_abrigo = mysqli_real_escape_string($connect,trim($_POST['modality'])); 
$name = mysqli_real_escape_string($connect,trim($_POST['campoNome']));
$cep = mysqli_real_escape_string($connect,trim($_POST['inputCep']));
$num_residencia = mysqli_real_escape_string($connect,trim($_POST['campoNumero'])); //não achei o num no html
$phone = mysqli_real_escape_string($connect,trim($_POST['campoTel']));
$email = mysqli_real_escape_string($connect,trim($_POST['campoEmail']));  
$password = mysqli_real_escape_string($connect,trim(md5($_POST['campoSenha'])));


$sql = "select count(*) as total from db_abrigo where email = '$email'";
$result = mysqli_query($connect,$sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] ==1) {
$_SESSION['Email já utilizado'] = true;
header('Location: login.php');
exit;
}

$sql = "select count(*) as total from db_pessoa where cnpj = '$cnpj'";
$result = mysqli_query($connect,$sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] ==1) {
$_SESSION['CNPJ já cadastrado'] = true;
header('Location: login.php');
exit;
}

$sql = "INSERT INTO db_abrigo (cnpj, tipo_abrigo, nome, cep, num_residencia, telefone, email, senha) 
VALUES ('$cnpj','$tipo_abrigo','$name','$cep','$num_residencia','$phone','$email','$password')";

if($connect->query($sql)===TRUE) {
    $_SESSION['status_cadastro'] = true;;
}

$connect->close();
header('Location: login.php');
exit;

?>