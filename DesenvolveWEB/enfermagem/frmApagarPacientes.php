<?php
session_start();
require "banco/conexao.php";

if (isset($_POST['apagarPaciente'])) {
    $paciente_id = mysqli_real_escape_string($conexao, $_POST['apagarPaciente']);

    $sql = "DELETE FROM pacientes WHERE idPaciente = '$paciente_id'";

    mysqli_query($conexao, $sql);

    if (mysqli_affected_rows($conexao) > 0) {
        $_SESSION['mensagem'] = 'Paciente apagado com sucesso';
        header('Location: lista_pacientes.php');
        exit;
    } else {
        $_SESSION['mensagem'] = 'Erro ao apagar paciente';
        header('Location: lista_pacientes.php');
        exit;
    }
}
?>
