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
    <!-- Formulário de Cadastro de Livros -->
    <main class="container">
        <form action="cadastro_livro.php" method="POST">
            <div class="row">
                <div class="col-md-4">
                    <label>*Código do Livro</label>
                    <input type="text" class="form-control" name="codigo" placeholder="Nº cod." required>
                </div>
                <div class="col-md-4">
                    <label>Setor</label>
                    <input type="text" class="form-control" name="setor" placeholder="OPCIONAL">
                </div>
                <div class="col-md-4">
                    <label>Estudante</label>
                    <input type="text" class="form-control" name="estudante" placeholder="OPCIONAL">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label>*Título do Livro</label>
                    <input type="text" class="form-control" name="titulo" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <label>*Ano</label>
                    <input type="number" class="form-control" name="ano" required>
                </div>
                <div class="col-md-3">
                    <label>*Autor</label>
                    <input type="text" class="form-control" name="autor" required>
                </div>
                <div class="col-md-3">
                    <label>*Editora</label>
                    <input type="text" class="form-control" name="editora" required>
                </div>
                <div class="col-md-3">
                    <label>*Classificação</label>
                    <input type="text" class="form-control" name="classificacao" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label>Observações</label>
                    <textarea class="form-control" name="observacoes"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label>*Data do Cadastro</label>
                    <input type="date" class="form-control" name="data_cadastro" required>
                </div>
            </div>
            <button type="submit" class="btn btn-success mt-3">Cadastrar</button>
        </form>
    </main>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>