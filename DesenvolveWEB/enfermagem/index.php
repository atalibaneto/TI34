<?php 
session_start();
require "banco/conexao.php"; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checagem à Beira Leito</title>
    <link rel="icon" type="image/x-icon" href="imagens/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid p-5">
        <img src="imagens/logo.png" width="150" alt="Logo Checagem a Beira Leito">
        <div class="row">
            <div class="col-sm-4">
                <?php include "menu.php"; ?>
            </div>
            <div class="col-sm-8 border p-3">
                <?php include "mensagem.php"; ?>
                <form action="frmCadastroPaciente.php" method="post">
                    <div class="row g-3">
                        <div class="col-sm">
                            <label for="nomePaciente" class="form-label">Nome do Paciente</label>
                            <input type="text" class="form-control" id="nomePaciente" name="nomePaciente">
                        </div>
                        <div class="col-sm-3">
                            <label for="dtNascPaciente" class="form-label">Data de Nascimento</label>
                            <input type="date" class="form-control" id="dtNascPaciente" name="dtNascPaciente">
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col-sm-2">
                        <label for="sexo" class="form-label">Sexo</label>
                        <select name="sexo" id="sexo" class="form-select" aria-label="Default select example">
                            <option value="masculino">Masculino</option>
                            <option value="feminino">Feminino</option>
                            <option value="outro">Outro</option>
                        </select>
                        </div>
                        <div class="col-sm">
                            <label for="nomeMae" class="form-label">Nome da mãe</label>
                            <input type="text" class="form-control" id="nomeMae" name="nomeMae">
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col-sm">
                            <label for="endereco" class="form-label">Endereço</label>
                            <input type="text" class="form-control" id="endereco" name="endereco">
                        </div>
                        <div class="col-sm-3">
                            <label for="dtInternacao" class="form-label">Data Internação</label>
                            <input type="date" class="form-control" id="dtInternacao" name="dtInternacao">
                        </div>
                    </div>
                    <button type="submit" name="cadastroPaciente" class="btn btn-success mt-3">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>
    
    <!-- Bootstrap JS (JQuery, Popper e Bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>