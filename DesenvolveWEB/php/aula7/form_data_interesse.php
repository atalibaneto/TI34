<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aula 7 - Fomulários [Checkbox]</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
    <a class="btn btn-primary" href="javascript: history.go(-1)" role="button">Voltar</a>     <a class="btn btn-primary" href="index.html" role="button">Home</a>

    <?php
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            if (isset($_POST['interesses'])) {
                echo "<h2>Interesses selecionados</h2>";
                echo "<ul>";
                foreach ($_POST['interesses'] as $interesse) {
                    echo "<li>".$interesse."</li>";
                }
                echo "</ul>";
            }
            else 
            {
                echo "<p>Nenhum checkbox selecionado</p>";
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