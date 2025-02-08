<?php
 include 'db.php';
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
    
    <div class="dashboard">
    <div class="card">
        <img src="assets/books.png" alt="Livros Cadastrados">
        <p>Livros Cadastrados:</p>
        <span id="livros-cadastrados">13</span>
    </div>
    <div class="card">
        <img src="assets/clock.png" alt="Pendentes">
        <p>Pendentes:</p>
        <span id="pendencias">0</span>
    </div>
    <div class="bloom">
    <div class="card">
        <img src="assets/bloom.png" alt="Livros Emprestados">
        <p>Livros Emprestados:</p>
        <span id="livros-emprestados">0</span>
    </div>
    </div>
</div>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>