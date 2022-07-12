<?php 
$host = "petfinder-server.mysql.database.azure.com";
$username = "juangabriel@petfinder-server";
$password = "Pet321587649";
$db_name = "pet_finder";
$conn = mysqli_init();


mysqli_real_connect($conn, 'petfinder-server.mysql.database.azure.com', 'juangabriel@petfinder-server', 'Pet321587649', 'pet_finder', 3306, NULL, MYSQLI_CLIENT_SSL);

if (mysqli_connect_errno($conn))
{
    die('Falha em conectar com o banco de dados: '.mysqli_connect_error());
}
?>
