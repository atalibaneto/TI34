<?php
session_start();
require "banco/conexao.php";

if (isset($_POST['editarPaciente'])) {
    $paciente_id = mysqli_real_escape_string($conexao, $_POST['idPaciente']);

    $nomePaciente = mysqli_real_escape_string($conexao, trim($_POST['nomePaciente']));
    $dtNascPaciente = mysqli_real_escape_string($conexao, trim($_POST['dtNascPaciente']));
    $sexo = mysqli_real_escape_string($conexao, trim($_POST['sexo']));
    $nomeMae = mysqli_real_escape_string($conexao, trim($_POST['nomeMae']));
    $endereco = mysqli_real_escape_string($conexao, trim($_POST['endereco']));
    $dtInternacao = mysqli_real_escape_string($conexao, trim($_POST['dtInternacao']));

    $sql = "UPDATE pacientes SET nomePaciente = '$nomePaciente', dtNascPaciente = '$dtNascPaciente', sexoPaciente = '$sexo', endPaciente = '$endereco', nomeMaePaciente = '$nomeMae', dtInternacaoPaciente = '$dtInternacao'";

    $sql .= " WHERE idPaciente = '$paciente_id'";
    
    mysqli_query($conexao, $sql);

    if (mysqli_affected_rows($conexao) > 0) {
        $_SESSION['mensagem'] = 'Paciente atualizado com sucesso';
        header('Location: index.php');
        exit;
    } else {
        $_SESSION['mensagem'] = 'Erro ao atualizar paciente';
        header('Location: index.php');
        exit;
    }
}

?>
