<?php
session_start(); // Inicia a sessão

if (!isset($_SESSION['name'])) {
    header('Location: ../LoginPage.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acervo da Maria Firmina dos Reis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dreaming+Outloud&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style2.css">
    <style>
        @font-face {
    font-family: 'TT Octosquares';
    src: url('assets/fonts/tt_octosquares/TT\ Octosquares\ Trial\ Regular.ttf') format('truetype');
    font-weight: normal;
    font-style: normal;
}
    /* Estilo para o modal */
    #myModal {
            display: none; /* Oculto por padrão */
            position: fixed; 
            z-index: 1; 
            left: 0;
            top: 10;
            width: 100%;
            height: 100%;
            overflow: auto; 
            background-color: rgb(0,0,0); 
            background-color: rgba(0,0,0,0.4); 
            padding-top: 60px; 
        }
        .modal-content {
            background-color: #fefefe;
            margin: 5% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%; 
        }
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }
        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

    </style>
</head>
<body>
    <!-- Cabeçalho -->
    <header>
        <div class="logo">
            <img src="ifma.png" alt="Logo">
        </div>
        <div class="icons">
            <a href="#" class="bi bi-list"></a>
            <a class="foto-perfil"> <img src="../imgs/ratue.jpg" width="30px" height="30px"></a>
            <a href="#" class="bi bi-gear-fill"></a>
            <a href="../principalbookverse.html" class="bi bi-house-fill"></a>
            <a href="../logout.php" class="bi bi-door-closed-fill"></a>
        </div>
    </header>

    <!-- Barra de Pesquisa -->
    <div class="search-bar">
        <input type="text" id="searchBar" placeholder="CONSULTE O LIVRO...">
        <button onclick="search()"><i class="bi bi-search"></i></button>
    </div>
<!-- Div do Modal -->
<div id="myModal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <div id="resultados"></div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    // Obtendo os elementos
    var modal = document.getElementById("myModal");
    var searchBar = document.getElementById("searchBar");
    var span = document.getElementsByClassName("close")[0];

    // Função para mostrar o modal
    searchBar.oninput = function() {
        var query = searchBar.value;
        if (query.length > 0) { 
            $.ajax({
                url: "search.php",
                method: "POST",
                data: {query: query},
                success: function(data) {
                    document.getElementById("resultados").innerHTML = data;
                    modal.style.display = "block";
                }
            });
        } else {
            modal.style.display = "none";
        }
    }

    // Função para fechar o modal quando o usuário clicar no "x"
    span.onclick = function() {
        modal.style.display = "none";
        searchBar.value = '';
    }

    // Função para fechar o modal quando o usuário clicar fora dele
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
            searchBar.value = '';
        }
    }
</script>


    <!-- Carrossel -->
    <div class="carousel-container">
        <div class="carousel-header">LIVROS</div>
        <button class="carousel-btn btn-prev" onclick="scrollCarousel(-1)">&#8249;</button>
        <div class="carousel-track" id="carousel-track">
            <!-- Elementos do carrossel -->
            <div class="carousel-item">
                <img src="assets/img/img1.jpg" alt="Livro 1">
                <div class="book-title">Menino do Pijama Listrado</div>
                <a href="detalhes10.html" class="details-btn">Detalhes</a>
            </div>
            <div class="carousel-item"> 
                <img src="assets/img/img3.jpg" alt="Livro 3">
                <div class="book-title">Jogos Vorazes - A Esperança</div>
                <a href="detalhes4.html" class="details-btn">Detalhes</a>
            </div>
            <div class="carousel-item">
                <img src="assets/img/img4.jpg" alt="Livro 1">
                <div class="book-title">Orgulho e Preconceito</div>
                <a href="detalhes13.html" class="details-btn">Detalhes</a>
            </div>
            <div class="carousel-item">
                <img src="assets/img/img5.jpg" alt="Livro 2">
                <div class="book-title">A Pata da Gazela</div>
                <a href="detalhes8.html" class="details-btn">Detalhes</a>
            </div>
            <div class="carousel-item">
                <img src="assets/img/img6.jpg" alt="Livro 3">
                <div class="book-title">Dessesseis Luas</div>
                <a href="detalhes12.html" class="details-btn">Detalhes</a>
            </div>
            <div class="carousel-item">
                <img src="assets/img/img8.jpg" alt="Livro 2">
                <div class="book-title">Assassin´s Creed </div>
                <a href="detalhes11.html" class="details-btn">Detalhes</a>
            </div>
            <div class="carousel-item">
                <img src="assets/img/img9.jpg" alt="Livro 3">
                <div class="book-title">A Escolha</div>
                <a href="detalhes.html" class="details-btn">Detalhes</a>
            </div>
            <div class="carousel-item">
                <img src="assets/img/img10.webp" alt="Livro 3">
                <div class="book-title">Punição para Inocência</div>
                <a href="detalhes2.html" class="details-btn">Detalhes</a>
            </div><div class="carousel-item">
                <img src="assets/img/img11.png" alt="Livro 3">
                <div class="book-title">Lucíola</div>
                <a href="detalhes6.html" class="details-btn">Detalhes</a>
            </div><div class="carousel-item">
                <img src="assets/img/img12.jpg" alt="Livro 3">
                <div class="book-title">Minha Vida Fora de Série</div>
                <a href="detalhes1.html" class="details-btn">Detalhes</a>
            </div>
            <div class="carousel-item">
                <img src="livroimg/livro3.jpg" alt="Livro 3">
                <div class="book-title">Fala Sério, Amiga!</div>
                <a href="detalhes3.html" class="details-btn">Detalhes</a>
            </div>
            <div class="carousel-item">
                <img src="livroimg/livro5.png" alt="Livro 3">
                <div class="book-title">A Moreninha</div>
                <a href="detalhes5.html" class="details-btn">Detalhes</a>
            </div>
            <div class="carousel-item">
                <img src="livroimg/livro7.jpg" alt="Livro 3">
                <div class="book-title">POESIA COMPLETA DE ALBERTO CAEIRO</div>
                <a href="detalhes7.html" class="details-btn">Detalhes</a>
            </div>
            <div class="carousel-item">
                <img src="livroimg/livro9.jpg" alt="Livro 3">
                <div class="book-title">MEMÓRIAS DE UM SARGENTO DE MILÍCIAS</div>
                <a href="detalhes9.html" class="details-btn">Detalhes</a>
            </div>
        </div>
        <button class="carousel-btn btn-next" onclick="scrollCarousel(1)">&#8250;</button>
    </div>
    <script src="assets/js/script3.js"></script>
    <div vw class="enabled">
        <div vw-access-button class="active"></div>
        <div vw-plugin-wrapper>
          <div class="vw-plugin-top-wrapper"></div>
        </div>
      </div>
      <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
      <script> new window.VLibras.Widget('https://vlibras.gov.br/app');</script>
</body>
</html>
