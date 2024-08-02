<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Caixa de texto de uma linha
    $textfield = htmlspecialchars($_POST['textfield']);
    
    // Caixa de texto de rolagem
    $textarea = htmlspecialchars($_POST['textarea']);
    
    // Caixa de seleção
    $checkbox = isset($_POST['checkbox']) ? 'Marcado' : 'Não marcado';
    
    // Botão de opção
    $radio = htmlspecialchars($_POST['radio']);
    
    // Menu suspenso
    $select = htmlspecialchars($_POST['select']);
    
    echo "<h1>Dados Recebidos</h1>";
    echo "<p><strong>Caixa de texto de uma linha:</strong> $textfield</p>";
    echo "<p><strong>Caixa de texto de rolagem:</strong> $textarea</p>";
    echo "<p><strong>Caixa de seleção:</strong> $checkbox</p>";
    echo "<p><strong>Botão de opção:</strong> $radio</p>";
    echo "<p><strong>Menu suspenso:</strong> $select</p>";
} else {
    echo "Método de requisição inválido.";
}
?>
