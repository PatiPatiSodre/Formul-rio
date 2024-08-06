<!DOCTYPE html>
<html>
<head>
    <title>Exibir Imagens da Pasta</title>
</head>
<body>

<form method="post" action="">
    <label for="nome_pasta">Nome da Pasta:</label>
    <input type="text" id="nomePasta" name="nomePasta" required><br><br>
    
    <label for="num_imagens">Numero de Imagens:</label>
    <input type="number" id="numImagens" name="numImagens" required><br><br>
    
    <input type="submit" value="Exibir Imagens">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $nomePasta = $_POST['nomePasta'];
    $numImagens = $_POST['numImagens'];

    echo "<table>";
    for ($i = 1; $i <= $numImagens; $i++)
    {
        echo "<tr>";
        echo "<td><img src='htdocs/$nomePasta/$i.jpg' width='150' height='100'></td>";
        echo "</tr>";
    }
    echo "</table>";
}
?>

</body>
</html>
