<?php 
include_once("../conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$cep = $_POST['cep'];
$numero = $_POST['numero'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];
$data_nascimento = $_POST['data_nascimento'];

$sql = "SELECT cpf FROM db_medico
WHERE cpf IN ('$cpf') OR
email IN ('$email')
UNION
SELECT cpf FROM db_pessoa
WHERE cpf IN ('$cpf') OR
email IN ('$email')";

$response = mysqli_query($conn, $sql);
$dados = mysqli_fetch_assoc($response);

if (count($dados) >= 1) {
    echo json_encode(false);
} else {
    $sql = "INSERT INTO db_pessoa (cpf, nome, data_nascimento, cep, num_residencia, telefone, email, senha, tipo_usuario) 
    VALUES ('$cpf','$nome','$data_nascimento','$cep','$numero','$telefone','$email','$senha','Pessoa')";
    mysqli_query($conn, $sql);
    echo json_encode(true);
}

mysqli_close($conn);
?>
