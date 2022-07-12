<?php
include_once("../conexao.php");
session_start();
$img_usuario = $_POST['img'];
$tipo_usuario = $_SESSION['tipo_usuario'];
$id_usuario = $_SESSION['id'];
switch ($tipo_usuario) {
    case 'Pessoa':
        $sql = "UPDATE db_pessoa
    SET foto_perfil = '$img_usuario'
    WHERE id = '$id_usuario'";
        break;
    case 'Abrigo':
        $sql = "UPDATE db_abrigo
    SET foto_perfil = '$img_usuario'
    WHERE id = '$id_usuario'";
        break;
    case 'Voluntario':
        $sql = "UPDATE db_medico
    SET foto_perfil = '$img_usuario'
    WHERE id = '$id_usuario'";
        break;
};
mysqli_query($conn, $sql);
$_SESSION['foto_perfil'] = $img_usuario;
mysqli_close($conn);
