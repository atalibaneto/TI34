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
            <div class="col-sm-3">
                <?php include "menu.php"; ?>
            </div>
            <div class="col-sm-9">
                <div class="card">
                    <div class="card-header">
                        <h4>Lista de Funcionários</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nome</th>
                                    <th>Cargo</th>
                                    <th>Conselho</th>
                                    <th>Registro</th>
                                    <th>Telefone</th>
                                    <th>Opções</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $sql = "SELECT * FROM funcionarios";
                                    $funcionarios = mysqli_query($conexao, $sql);
                                    if (mysqli_num_rows($funcionarios) > 0) {
                                        foreach ($funcionarios as $funcionario) {
                                    /*print_r($usuarios); //ler arrays
                                    exit;*/
                                ?>
                                <tr>
                                    <td><?= $funcionario['idFuncionario']?></td>
                                    <td><?= $funcionario['nomeFuncionario']?></td>
                                    <td><?= $funcionario['cargoFuncionario']?></td>
                                    <td><?= $funcionario['tipoConselhoFuncionario']?></td>
                                    <td><?= $funcionario['nRegistroConselhoFuncionario']?></td>
                                    <td><?= $funcionario['telefoneFuncionario']?></td>
                                    <td>
                                        <a href="ver_funcionario.php?idFuncionario=<?= $funcionario['idFuncionario']?>" class="btn btn-secondary btn-sm">Ver</a>
                                        <a href="" class="btn btn-success btn-sm">Editar</a>
                                        <form action="" method="POST" class="d-inline">
                                            <button type="submit" name="apagarPaciente" value="1" class="btn btn-danger btn-sm">Excluir</button>
                                        </form>
                                    </td>
                                </tr>
                                <?php 
                                    }
                                } else {
                                    echo "<h5>Nenhum paciente cadastrado</h5>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Bootstrap JS (JQuery, Popper e Bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>