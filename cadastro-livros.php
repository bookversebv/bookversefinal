<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "biblioteca";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$nome_autor = $_POST['nome_autor'];
$nome_ilustrador = $_POST['nome_ilustrador'];
$data_lancamento = $_POST['data_lancamento'];

$sql = "INSERT INTO livros (nome_autor, nome_ilustrador, data_lancamento) VALUES ('$nome_autor', '$nome_ilustrador', '$data_lancamento')";

if ($conn->query($sql) === TRUE) {
        $type = "text"; // Altera o atributo type para text.
        $mensagem = "Cadastro Concluído!"; //Insere a mensagem.
        $cor = "green"; //Muda a cor.
} else {
        $type = "text"; // Altera o atributo type para text.
        $mensagem = "Algo deu errado, tente novamente mais tarde!"; //Insere a mensagem.
        $cor = "red"; //Muda a cor.
}
?>