<!DOCTYPE html>
<html>
<head>
    <title>Verificação de Aprovação</title>
</head>
<body>

<h2>Informe os dados do aluno:</h2>

<form method="post" action="">
    Nome: <input type="text" name="nome"><br><br>
    Nota 1: <input type="number" name="nota1"><br><br>
    Nota 2: <input type="number" name="nota2"><br><br>
    Frequência (%): <input type="number" name="frequencia"><br><br>
    <input type="submit" value="Verificar">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $nome = $_POST['nome'];
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $frequencia = $_POST['frequencia'];

    $media = ($nota1 + $nota2) / 2;

    echo "<h2>Dados do Aluno:</h2>";
    echo "Nome: " . $nome . "<br>";
    echo "Nota 1: " . $nota1 . "<br>";
    echo "Nota 2: " . $nota2 . "<br>";
    echo "Frequência: " . $frequencia . "%<br>";
    echo "Média: " . $media . "<br>";

    if ($media < 5)
    {
        echo "<p style='color: red;'>Reprova por nota</p>";
    }
    elseif ($frequencia < 75)
    {
        echo "<p style='color: red;'>Reprova por Frequência</p>";
    }
    elseif ($frequencia >= 75 && $media >= 5)
    {
        echo "<p>Aprovado</p>";
    }
}
?>

</body>
</html>
