<?php
// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera os dados do formulário
    $produto = $_POST['produto'];
    $quantidade = $_POST['quantidade'];

    // Aqui você pode realizar qualquer lógica de controle de estoque necessária
    // Por exemplo, adicionar o produto ao banco de dados ou a um arquivo de registro

    // Exemplo de exibição dos dados inseridos
    echo "<h2>Produto Adicionado:</h2>";
    echo "<p>Nome do Produto: $produto</p>";
    echo "<p>Quantidade: $quantidade</p>";
} else {
    // Se o formulário não foi submetido, redireciona para o index.html
    header("Location: index.html");
    exit;
}
?>
