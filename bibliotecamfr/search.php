<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bookverse-bd";

// Conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

if (isset($_POST['query'])) {
    $query = $_POST['query'];
    $sql = "SELECT * FROM livros WHERE nome LIKE '%$query%' OR autor LIKE '%$query%'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<p><a href='../paginadetalheslaboratorio/detalhes.html'   ><strong>" . $row['nome'] . "</strong> </a> do autor " . $row['autor'] . " (" . $row['ano_publicacao'] . ")</p>";
        }
    } else {
        echo "<p>Nenhum resultado encontrado</p>";
    }
}

$conn->close();
?>
