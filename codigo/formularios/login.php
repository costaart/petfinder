<?php
include_once('../conexao.php');

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "SELECT tipo_usuario
FROM db_medico
WHERE email IN ('$email')
AND senha IN('$senha')
UNION 
SELECT tipo_usuario
FROM db_pessoa 
WHERE email IN ('$email')
AND senha IN('$senha')
UNION
SELECT tipo_usuario
FROM db_abrigo
WHERE email IN ('$email')
AND senha IN('$senha')";
$response = mysqli_query($conn, $sql);
$dados = mysqli_fetch_object($response);
if (count($dados) == 1) {
    $tipo_usuario = $dados->{'tipo_usuario'};
    switch ($tipo_usuario) {
        case 'Voluntario':
            $sql = "SELECT * FROM db_medico
            WHERE email IN ('$email')
            AND senha IN('$senha')";
            break;
        case 'Pessoa':
            $sql = "SELECT * FROM db_pessoa
            WHERE email IN ('$email')
            AND senha IN('$senha')";
            break;
        case 'Abrigo':
            $sql = "SELECT * FROM db_abrigo
            WHERE email IN ('$email')
            AND senha IN('$senha')";
            break;
    }

    $response = mysqli_query($conn, $sql);
    $dados = mysqli_fetch_array($response);
    $colunas = mysqli_fetch_fields($response);
    session_start();
    for ($i = 0; $i < count($dados); $i++) {
        $name = $colunas[$i]->name;
        $name = $colunas[$i]->name;
        $_SESSION[$name] = $dados[$i];
    }
    echo json_encode(true);
} else {
    echo json_encode(false);
}

mysqli_close($conn);
