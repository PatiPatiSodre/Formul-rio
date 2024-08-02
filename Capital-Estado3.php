<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mapeamento de estados e suas capitais
    $estados = array(
        "amazonas" => "Manaus",
        "bahia" => "Salvador",
        "ceara" => "Fortaleza",
        "distrito federal" => "Brasília",
        "espirito santo" => "Vitória",
        "goias" => "Goiânia",
        "minas gerais" => "Belo Horizonte",
        "pernambuco" => "Recife",
        "rio de janeiro" => "Rio de Janeiro",
        "sao paulo" => "São Paulo",
        "tocantins" => "Palmas"
    );

    // Receber o nome do estado do formulário
    $estado = strtolower(trim($_POST['estado']));

    // Verificar se o estado existe no array e mostrar a capital
    if (array_key_exists($estado, $estados)) {
        $capital = $estados[$estado];
        echo "<h1>Resultado</h1>";
        echo "<p><strong>Estado:</strong> " . ucfirst($estado) . "</p>";
        echo "<p><strong>Capital:</strong> " . $capital . "</p>";
    } else {
        echo "<h1>Erro</h1>";
        echo "<p>Estado não encontrado. Por favor, insira um nome válido de estado.</p>";
    }
} else {
    echo "<h1>Erro</h1>";
    echo "<p>Método de requisição inválido.</p>";
}
?>
