<?php
session_start();
require "banco/conexao.php";

if (isset($_POST['apagarFuncionario'])) {
    $funcionario_id = mysqli_real_escape_string($conexao, $_POST['apagarFuncionario']);

    $sql = "DELETE FROM funcionarios WHERE idFuncionario = '$funcionario_id'";

    mysqli_query($conexao, $sql);

    if (mysqli_affected_rows($conexao) > 0) {
        $_SESSION['mensagem'] = 'Funcionário apagado com sucesso';
        header('Location: lista_funcionarios.php');
        exit;
    } else {
        $_SESSION['mensagem'] = 'Erro ao apagar funcionário';
        header('Location: lista_funcionarios.php');
        exit;
    }
}
?>
