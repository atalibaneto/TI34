<?php
session_start();
require "banco/conexao.php";

if (isset($_POST['cadastroFunc'])) {
    $nomeFunc = mysqli_real_escape_string($conexao, trim($_POST['nomeFuncionario']));
    $cargoFunc = mysqli_real_escape_string($conexao, trim($_POST['cargo']));
    $conselhoFunc = mysqli_real_escape_string($conexao, trim($_POST['conselho']));
    $nRegistroFunc = mysqli_real_escape_string($conexao, trim($_POST['numRegistro']));
    $telefoneFunc = mysqli_real_escape_string($conexao, trim($_POST['telefone']));
    
    $sql = "INSERT INTO funcionarios (nomeFuncionario, cargoFuncionario, tipoConselhoFuncionario, nRegistroConselhoFuncionario, telefoneFuncionario) VALUES ('$nomeFunc', '$cargoFunc', '$conselhoFunc', '$nRegistroFunc', '$telefoneFunc')";

    mysqli_query($conexao, $sql);

    if (mysqli_affected_rows($conexao) > 0) {
        $_SESSION['mensagem'] = 'Funcionário criado com sucesso';
        header('Location: index.php');
        exit;
    } else {
        $_SESSION['mensagem'] = 'Erro ao criar o funcionário';
        header('Location: index.php');
        exit;
    }
}
?>
