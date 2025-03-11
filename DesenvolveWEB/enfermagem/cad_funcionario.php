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
                <ul class="nav flex-column">
                    <li class="nav-item p-1">
                        <a class="btn btn-success" href="index.php">Cadastrar Paciente</a>
                    </li>
                    <li class="nav-item p-1">
                        <a class="btn btn-success" href="cad_funcionario.php">Cadastrar Funcionário</a>
                    </li>
                    <li class="nav-item p-1">
                        <a class="btn btn-success" href="checagem.php">Checagem</a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-8 border p-3">
                <form action="frmCadastroFuncionario.php" method="post">
                    <div class="row g-3">
                        <div class="col-sm">
                            <label for="nomeFuncionario" class="form-label">Nome do Funcionário</label>
                            <input type="text" class="form-control" id="nomeFuncionario" name="nomeFuncionario">
                        </div>
                        <div class="col-sm-3">
                            <label for="cargo" class="form-label">Cargo/Função</label>
                            <input type="text" class="form-control" id="cargo" name="cargo">
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col-sm-2">
                        <label for="conselho" class="form-label">Tipo Conselho</label>
                        <select class="form-select" aria-label="Default select example">
                            <option value="coren">Coren</option>
                            <option value="crm">Crm</option>
                        </select>
                        </div>
                        <div class="col-sm">
                            <label for="numRegistro" class="form-label">Número do Registro no Conselho</label>
                            <input type="text" class="form-control" id="numRegistro" name="numRegistro">
                        </div>
                    </div>
                    <div class="row g-3">
                    <div class="col-sm-2">
                            <label for="telefone" class="form-label">Telefone</label>
                            <input type="text" class="form-control" id="telefone" name="telefone">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success mt-3">Cadastrar</button>
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