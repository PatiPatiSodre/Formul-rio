<?php
$prontuario = $_POST['prontuario'];
$nome = $_POST['nome'];
$idade = $_POST['idade'];
$periodo = $_POST['periodo'];
$modulo = $_POST['modulo'];

if(empty($prontuario) || empty($nome) || $idade < 15 || $idade > 75 || !preg_match("/[VN]{1}/", $periodo) || $modulo < 1 || $modulo > 4) {
    echo "Por favor, preencha o formulário corretamente.";
} else {
    echo "Formulário preenchido corretamente!";
}
?>
