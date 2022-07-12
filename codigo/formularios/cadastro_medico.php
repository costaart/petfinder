<?php 
include_once("../conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$cep = $_POST['cep'];
$numero = $_POST['numero'];
$cpf = $_POST['cpf'];
$especialidade = $_POST['especialidade'];
$crmv = $_POST['crmv'];
$telefone = $_POST['telefone'];
$data_nascimento = $_POST['data_nascimento'];
$data_cadastro = $_POST['data_cadastro'];

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
    $sql = "INSERT INTO db_medico (cpf, nome, crmv, data_nascimento, especialidade, telefone, cep, email, senha, num_residencia, data_cadastro, tipo_usuario) 
    VALUES ('$cpf','$nome','$crmv','$data_nascimento','$especialidade','$telefone','$cep','$email','$senha','$numero','$data_cadastro','Voluntario')";
    mysqli_query($conn, $sql);
    mysqli_close($conn);
    echo json_encode(true);
}

?>