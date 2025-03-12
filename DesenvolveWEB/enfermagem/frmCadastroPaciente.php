<?php
session_start();
require "banco/conexao.php";

if (isset($_POST['cadastroPaciente'])) {
    $nomePaciente = mysqli_real_escape_string($conexao, trim($_POST['nomePaciente']));
    $dtNascPaciente = mysqli_real_escape_string($conexao, trim($_POST['dtNascPaciente']));
    $sexo = mysqli_real_escape_string($conexao, trim($_POST['sexo']));
    $nomeMae = mysqli_real_escape_string($conexao, trim($_POST['nomeMae']));
    $endereco = mysqli_real_escape_string($conexao, trim($_POST['endereco']));
    $dtInternacao = mysqli_real_escape_string($conexao, trim($_POST['dtInternacao']));

    $sql = "INSERT INTO pacientes (nomePaciente, dtNascPaciente, sexoPaciente,  endPaciente,
    nomeMaePaciente, dtInternacaoPaciente) VALUES ('$nomePaciente', '$dtNascPaciente', '$sexo', '$endereco', '$nomeMae','$dtInternacao')";

    /* if (mysqli_query($conexao, $sql)) {
        echo "Paciente cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar paciente: ". mysqli_error($conexao);
    } */

    mysqli_query($conexao, $sql);

    if (mysqli_affected_rows($conexao) > 0) {
        $_SESSION['mensagem'] = 'Paciente criado com sucesso';
        header('Location: index.php');
        exit;
    } else {
        $_SESSION['mensagem'] = 'Erro ao criar o paciente';
        header('Location: index.php');
        exit;
    }
}
?>
