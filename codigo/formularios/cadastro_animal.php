<?php
include_once("../conexao.php");
$arquivo_tmp = $_FILES['foto']['tmp_name'];
$tipo_arquivo = $_FILES['foto']['type'];
$tamanho_arquivo = $_FILES['foto']['size'];
$nome = $_FILES['foto']['name'];

// Pega a extensão
$extensao = pathinfo($nome, PATHINFO_EXTENSION);
$extensao = strtolower($extensao);
$novoNome = uniqid(time()) . '.' . $extensao;

// Concatena a pasta com o nome
$destino = 'imagens_clientes/' . $novoNome;

// tenta mover o arquivo para o destino
move_uploaded_file($arquivo_tmp, $destino);;

echo json_encode($nome);
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$tipoAnimal = $_POST['tipo_animal'];
$porte = $_POST['porte'];
$idade = $_POST['idade'];
$infoMedico = $_POST['info_medicas'];
$contatoResp = $_POST['contato_resp'];
$raca = $_POST['raca'];
$sexo = $_POST['sexo'];

session_start();

if (isset($_SESSION['cnpj'])) {                 
    $chave_usuario = $_SESSION['cnpj'];
}else {
    $chave_usuario = $_SESSION['cpf'];
};


$comandoSQL = "INSERT INTO db_animal (nome_animal, raça, tipo_animal, sexo, porte, informacoes_medicas, descricao, idade, foto_animal, contato_resp, chave_usuario) 
VALUES ('$nome','$raca','$tipoAnimal','$sexo','$porte','$infoMedico','$descricao','$idade','$novoNome','$contatoResp','$chave_usuario')";
mysqli_query($conn, $comandoSQL);
mysqli_close($conn);
header("Location: ../meu_perfil.php");
