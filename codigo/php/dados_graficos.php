<?php

include_once("../conexao.php");
$tipo_dado = $_POST['tipo_dado'];

switch ($tipo_dado) {
    case 'tipo_animais':
        $sql = "SELECT COUNT(id), tipo_animal
        FROM db_animal
        WHERE tipo_animal IN ('Gato','Cachorro')
        GROUP BY tipo_animal
        ORDER BY 1";
        break;
    case 'quantidade_voluntario':
        $sql = "SELECT COUNT(MONTH(data_cadastro)), EXTRACT(MONTH FROM data_cadastro)
        FROM db_medico
        GROUP BY data_cadastro
        ORDER BY 2";
        break;
    case 'raca':
        $sql = "SELECT COUNT(id) as qnt
        FROM db_animal
        WHERE raça <> 'Sem Raça Definida'
        UNION
        SELECT COUNT(id) as qnt
        FROM db_animal
        WHERE raça = 'Sem Raça Definida'";
        break;
    case 'idade':
        $sql = "SELECT COUNT(idade) as quantidade, idade
        FROM db_animal
        GROUP BY idade";
        break;
}

$resultado = mysqli_query($conn, $sql);
$linha = mysqli_fetch_all($resultado);
echo json_encode($linha);
mysqli_close($conn);
