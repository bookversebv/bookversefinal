<?php
// Incluir o arquivo de conexão com o banco de dados
include("db.php");

// Verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capturar os dados do formulário
    $codigo = $_POST['codigo'];
    $titulo = $_POST['titulo'];
    $ano = $_POST['ano'];
    $autor = $_POST['autor'];
    $editora = $_POST['editora'];
    $classificacao = $_POST['classificacao'];
    $observacoes = $_POST['observacoes'];
    $data_cadastro = $_POST['data_cadastro'];

    try {
        // Inserir os dados no banco de dados
        $sql = "INSERT INTO livros (codigo, titulo, ano, autor, editora, classificacao, observacoes, data_cadastro) 
                VALUES (:codigo, :titulo, :ano, :autor, :editora, :classificacao, :observacoes, :data_cadastro)";
        
        $stmt = $pdo->prepare($sql);
        
        // Associar os valores aos parâmetros
        $stmt->bindParam(':codigo', $codigo);
        $stmt->bindParam(':titulo', $titulo);
        $stmt->bindParam(':ano', $ano);
        $stmt->bindParam(':autor', $autor);
        $stmt->bindParam(':editora', $editora);
        $stmt->bindParam(':classificacao', $classificacao);
        $stmt->bindParam(':observacoes', $observacoes);
        $stmt->bindParam(':data_cadastro', $data_cadastro);

        // Executar a inserção
        $stmt->execute();
        
        echo "Livro cadastrado com sucesso!";
        header("Location: index.php");
    } catch (PDOException $e) {
        echo "Erro ao cadastrar livro: " . $e->getMessage();
    }
}
?>
