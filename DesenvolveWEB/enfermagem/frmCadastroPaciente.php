<?php
session_start();
require "banco/conexao.php";

if (isset($_POST['cadastroPaciente'])) {
    $nome = mysqli_real_escape_string($conexao, trim($_POST['nomePaciente']));
    $dataNasc = mysqli_real_escape_string($conexao, trim($_POST['dtNascPaciente']));
    $sexo = mysqli_real_escape_string($conexao, trim($_POST['sexo']));
    $nomeMae = mysqli_real_escape_string($conexao, trim($_POST['nomeMae']));
    $endereco = mysqli_real_escape_string($conexao, trim($_POST['endereco']));
}
?>