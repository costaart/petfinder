<?php
include_once("../conexao.php");
session_start();
$nome = $_POST['nome'];
$cep = $_POST['cep'];
$numero = $_POST['numero'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$tipo_usuario = $_SESSION['tipo_usuario'];
switch($tipo_usuario) {
    case 'Voluntario':
        $cpf = $_SESSION['cpf'];
        $sql = "UPDATE db_medico 
        SET nome = '$nome', cep = '$cep', num_residencia = '$numero', telefone = '$telefone', email = '$email'
        WHERE cpf = '$cpf'";
    break;
    case 'Pessoa':
        $cpf = $_SESSION['cpf'];
        $sql = "UPDATE db_pessoa 
        SET nome = '$nome', cep = '$cep', num_residencia = '$numero', telefone = '$telefone', email = '$email'
        WHERE cpf = '$cpf'";
    break;
    case 'Abrigo':
        $cnpj = $_SESSION['cnpj'];
        $cnpj = $_SESSION['cnpj'];
        $sql = "UPDATE db_abrigo 
        SET nome = '$nome', cep = '$cep', num_residencia = '$numero', telefone = '$telefone', email = '$email'
        WHERE cpf = '$cnpj'";
    break;
}

mysqli_query($conn, $sql);
mysqli_close($conn);

?>