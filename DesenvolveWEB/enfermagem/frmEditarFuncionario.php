<?php
session_start();
require "banco/conexao.php";

if (isset($_POST['editarFuncionario'])) {
    $funcionario_id = mysqli_real_escape_string($conexao, $_POST['idFuncionario']);

    $nomeFunc = mysqli_real_escape_string($conexao, trim($_POST['nomeFuncionario']));
    $cargoFunc = mysqli_real_escape_string($conexao, trim($_POST['cargoFuncionario']));
    $conselhoFunc = mysqli_real_escape_string($conexao, trim($_POST['tipoConselhoFuncionario']));
    $nRegistroFunc = mysqli_real_escape_string($conexao, trim($_POST['numRegistro']));
    $telefoneFunc = mysqli_real_escape_string($conexao, trim($_POST['telefone']));

    $sql = "UPDATE funcionarios SET nomeFuncionario = '$nomeFunc', cargoFuncionario = '$cargoFunc', tipoConselhoFuncionario = '$conselhoFunc', nRegistroConselhoFuncionario = '$nRegistroFunc', telefoneFuncionario = '$telefoneFunc'";

    $sql .= " WHERE idFuncionario = '$funcionario_id'";
    
    mysqli_query($conexao, $sql);

    if (mysqli_affected_rows($conexao) > 0) {
        $_SESSION['mensagem'] = 'Funciona atualizado com sucesso';
        header('Location: index.php');
        exit;
    } else {
        $_SESSION['mensagem'] = 'Erro ao atualizar paciente';
        header('Location: index.php');
        exit;
    }
}

?>
