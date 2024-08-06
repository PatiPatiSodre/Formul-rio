<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $nome = $_POST['nome'];
    $horario = $_POST['horario'];

    $cumprimento = '';
    if ($horario >= '00:00' && $horario < '12:00')
    {
        $cumprimento = 'Bom dia';
    }
    elseif ($horario >= '12:00' && $horario < '18:00')
    {
        $cumprimento = 'Boa tarde';
    }
    else 
    {
        $cumprimento = 'Boa noite';
    }

    echo "Olá, $nome! $cumprimento!";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Formulário Cumprimento</title>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome"><br>
        <label for="horario">Horário (HH:MM):</label><br>
        <input type="text" id="horario" name="horario"><br><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
