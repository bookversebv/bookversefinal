<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Livros</title>
</head>
<body>
    <h1>Cadastro de Livros</h1>
    <form action="cadastro-livros.php" method="post">
        <label for="nome_autor">Nome do Autor:</label>
        <input type="text" id="nome_autor" name="nome_autor" required><br><br>

        <label for="nome_ilustrador">Nome do Ilustrador:</label>
        <input type="text" id="nome_ilustrador" name="nome_ilustrador" required><br><br>

        <label for="data_lancamento">Data de Lançamento:</label>
        <input type="date" id="data_lancamento" name="data_lancamento" required><br><br>

        <label for=""></label>

        <input type="submit" value="Cadastrar Livro"><br><br>
        
        <p id="mensagem" type="" style="" required> </p>
    </form>
</body>
</html>