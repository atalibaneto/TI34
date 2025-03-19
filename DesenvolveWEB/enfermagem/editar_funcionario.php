<?php 
session_start();
require "banco/conexao.php"; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Funcionário | Checagem à Beira Leito</title>
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
                <?php 
                    if (isset($_GET['idFuncionario'])) {
                        $funcionario_id = mysqli_real_escape_string($conexao, $_GET['idFuncionario']);
                        $sql = "SELECT * FROM funcionarios WHERE idFuncionario='$funcionario_id'";
                        $query = mysqli_query($conexao, $sql);

                        if (mysqli_num_rows($query) > 0) {
                            $funcionario = mysqli_fetch_array($query);
                ?>
                <?php include "mensagem.php"; ?>
                <form action="frmEditarFuncionario.php" method="post">
                    <input type="hidden" name="idFuncionario" value="<?= $funcionario['idFuncionario'] ?>">
                    <div class="row g-3">
                        <div class="col-sm">
                            <label for="nomeFuncionario" class="form-label">Nome do Funcionário</label>
                            <input type="text" class="form-control" id="nomeFuncionario" name="nomeFuncionario" value="<?= $funcionario['nomeFuncionario'] ?>">
                        </div>
                        <div class="col-sm-3">
                            <label for="cargoFuncionario" class="form-label">Cargo do Funcionário</label>
                            <input type="text" class="form-control" id="cargoFuncionario" name="cargoFuncionario" value="<?= $funcionario['cargoFuncionario'] ?>">
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col-sm-2">
                        <label for="conselho" class="form-label">Tipo do Conselho</label>
                        <select name="tipoConselhoFuncionario" id="conselho" class="form-select" aria-label="Default select example">
                            <?php
                                $conselhoFunc = $funcionario['tipoConselhoFuncionario'];

                                switch ($conselhoFunc) {
                                    case "coren":
                                        echo "<option value=\"coren\" selected>Coren</option>
                                        <option value=\"crm\">Crm</option>";
                                        break;
                                    case "crm";
                                        echo "<option value=\"coren\">Coren</option>
                                        <option value=\"crm\" selected>Crm</option>";
                                        break;
                                }
                            ?>
                        </select>
                        </div>
                        <div class="col-sm">
                            <label for="registro" class="form-label">Número do Registro no Conselho</label>
                            <input type="text" class="form-control" id="registro" name="numRegistro" value="<?= $funcionario['nRegistroConselhoFuncionario'] ?>">
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col-sm">
                            <label for="telefone" class="form-label">Telefone</label>
                            <input type="text" class="form-control" id="telefone" name="telefone" value="<?= $funcionario['telefoneFuncionario'] ?>">
                        </div>
                    </div>
                    <button type="submit" name="editarFuncionario" class="btn btn-success mt-3">Editar</button>
                </form>
                <?php 
                    } else {
                        echo "<h5>Usuário não encontrado</h5>";
                    }
                }
                ?>
            </div>
        </div>
    </div>
    
    <!-- Bootstrap JS (JQuery, Popper e Bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>