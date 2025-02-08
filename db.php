<?php
$host = "localhost";  // ou o endereço do seu servidor de banco de dados
$dbname = "bookverse-bd";  // Substitua com o nome do seu banco de dados
$username = "root";  // Nome de usuário do banco de dados
$password = "";  // Senha do banco de dados

// Conectar ao banco de dados
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Configurar o PDO para lançar exceções em caso de erro
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erro ao conectar: " . $e->getMessage();
}
?>
