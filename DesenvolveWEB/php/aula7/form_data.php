<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aula 7 - Formulários Continuação</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
    <a class="btn btn-primary" href="javascript: history.go(-1)" role="button">Voltar</a>
    <h2>Respostas</h2>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") //verifica o método utilizado pelo formulário
        {
            if (isset($_POST['questao1'])) //verifica se a variável está vazia
            {
                $resposta1 = $_POST['questao1'];
                if ($resposta1 == 'nao') {
                    $resposta1 = "<div class=\"text-danger\">Não</div>";
                } else 
                {
                    $resposta1 = "<div class=\"text-success\">Sim</div>";
                }
                echo "<h4>Você já se sentiu constrangido(a) com perguntas invasivas em entrevistas de emprego? <strong>$resposta1</strong></h4>";
            }
            else
            {
                echo "<p>Nenhuma resposta foi selecionada</p>";
            }
        }
        else
        {
            echo "<p>O formulário não foi enviado.</p>";
        }
    ?>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>