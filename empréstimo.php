<?php
require 'config.php'; // Arquivo com conexão ao banco de dados

// Recupera a lista de livros disponíveis
$sql = "SELECT id, nome  FROM livros_detalhes WHERE status = 'disponivel'";
$result = $conn->query($sql);
$livros = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $livros[] = $row;
    }
}

// Processa o empréstimo
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome_aluno = $_POST['nome_aluno'];
    $data_retirada = $_POST['data_retirada'];
    $data_entrega = $_POST['data_entrega'];
    $livro_id = $_POST['livro_id'];

    $sql = "INSERT INTO emprestimos (nome_aluno, livro_id, data_retirada, data_entrega, status) VALUES (?, ?, ?, ?, 'pendente')";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("siss", $nome_aluno, $livro_id, $data_retirada, $data_entrega);
    if ($stmt->execute()) {
        $stmt = $conn->prepare("INSERT INTO emprestimos (nome_aluno, livro_id, data_retirada, data_entrega, status) VALUES (?, ?, ?, ?, 'pendente')");
        $stmt->bind_param("siss", $nome_aluno, $livro_id, $data_retirada, $data_entrega);
        echo "<script>alert('Empréstimo realizado com sucesso!');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Livro</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

    <!-- CSS personalizado -->
    <link rel="stylesheet" href="assets/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">

    <!-- JavaScript personalizado -->
    <script defer src="assets/script.js"></script>
</head>
<body>

    <!-- Cabeçalho -->
    <header>
        <div class="logo">
            <img src="assets/ifma.png" alt="Logo">
        </div>
        <div class="icons">
            <a href="#" class="icon bi bi-list"></a>
            <a href="#" class="icon bi bi-person-circle"></a>
            <a href="#" class="icon bi bi-gear-fill"></a>
            <a href="#" class="icon bi bi-house-fill"></a>
        </div>
    </header>
    

    <!-- Menu Lateral (Dropdown) -->
    <aside class="sidebar">
        <button class="btn-dropdown" id="dropdownButton">
            <i class="bi bi-chevron-down"></i> Menu
        </button>
        <div class="dropdown-content" id="dropdownMenu">
            <img src="gotoh.png" alt="Avatar" class="avatar">
            <ul>
                <li><a href="index.php">Página Inicial</a></li>
                <li><a href="cadastrar_livros.php">Cadastrar Livros</a></li>
                <li><a href="empréstimo.php">Empréstimos</a></li>
            </ul>
        </div>
    </aside>
    <hr class="title-separator">
    <h2 class="title">SISTEMA BIBLIOTECA MFR</h2>
    <hr class="title-separator">
    <div class="container">
        <form method="POST">
            <label for="nome_aluno">*Nome do aluno:</label>
            <input type="text" id="nome_aluno" name="nome_aluno" required>
            
            <label for="data_retirada">*Data de retirada do livro:</label>
            <input type="date" id="data_retirada" name="data_retirada" required>
            
            <label for="data_entrega">*Data de entrega do livro:</label>
            <input type="date" id="data_entrega" name="data_entrega" required>
            
            <label for="livro">*Livro a ser emprestado:</label>
            <select id="livro" name="livro" required>
                <option value="">Selecione um livro</option>
                <?php foreach ($livros as $livro) { ?>
                    <option value="<?= $livro['id'] ?>"><?= $livro['nome'] ?></option>
                <?php } ?>
            </select>
            
            <button class="btn-confirm" type="submit">Confirmar Empréstimo</button>
        </form>
    </div>
</body>
</html>