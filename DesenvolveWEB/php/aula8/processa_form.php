<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fomulários - [SELECT]</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
  <?php include "menu.php"; ?>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $cidade = $_POST['cidade'];

            echo "Você escolheu a cidade: ";

            switch ($cidade) {
                case 'sp':
                    echo "<strong>São Paulo</strong>";
                    break;
                case 'rj':
                    echo "<strong>Rio de Janeiro</strong>";
                    break;
                case 'bh':
                    echo "<strong>Belo Horizonte</strong>";
                    break;
                case 'poa':
                    echo "<strong>Porto Alegre</strong>";
                    break;
                default:
                    echo "<strong>Cidade não encontrada</strong>";
                    break;
            }
        }
    ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
