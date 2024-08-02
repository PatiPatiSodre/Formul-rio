<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se o ano foi enviado e é um número
    if (isset($_POST['ano']) && is_numeric($_POST['ano'])) {
        $ano = intval($_POST['ano']);

        // Função para verificar se o ano é bissexto
        function isBissexto($ano) {
            // Verifica se o ano é divisível por 400
            if ($ano % 400 == 0) {
                return true;
            }
            // Verifica se o ano é divisível por 4 e não divisível por 100
            if ($ano % 4 == 0 && $ano % 100 != 0) {
                return true;
            }
            // Caso contrário, não é bissexto
            return false;
        }

        // Verifica e exibe o resultado
        if (isBissexto($ano)) {
            echo "<p>O ano $ano é bissexto.</p>";
        } else {
            echo "<p>O ano $ano não é bissexto.</p>";
        }
    } else {
        echo "<p>Por favor, insira um ano válido.</p>";
    }
} else {
    echo "<p>Formulário não enviado.</p>";
}
?>
