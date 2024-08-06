<!DOCTYPE html>
<html>
<head>
    <title>Vendas de Camisetas</title>
</head>
<body>
    <h1>Vendas de Camisetas</h1>
    <form method="post" action="">
        <label for="small">Quantidade de Camisetas Pequenas:</label>
        <input type="number" id="pequenas" name="pequenas" required><br><br>
        
        <label for="medium">Quantidade de Camisetas Médias:</label>
        <input type="number" id="medias" name="medias" required><br><br>
        
        <label for="large">Quantidade de Camisetas Grandes:</label>
        <input type="number" id="grandes" name="grandes" required><br><br>
        
        <input type="submit" value="Calcular Valor Total">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $pequenas = 10;
        $medias = 12;
        $grandes = 15;

        $quantPequenas = $_POST["pequenas"];
        $quantMedias = $_POST["medias"];
        $quantGrandes = $_POST["grandes"];

        $total = ($quantPequenas * $quantPequenas) + ($quantMedias * $quantMedias) + ($quantGrandes * $quantGrandes);

        echo "<h2>Valor Total: R$ " . $total . "</h2>";
    }
    ?>
</body>
</html>
