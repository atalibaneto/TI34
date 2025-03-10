<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fomulários - [SELECT]</title>
    <!-- <link rel="icon" type="image/x-icon" href="/images/favicon.ico"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <?php include "menu.php"; ?>
        <br><br>
        <form action="processa_multiplo.php" method="POST">
            <label for="interesses">Selecione a área de interesse:</label>
            <select name="interesses[]" multiple>
                <option value="Tecnologia">Tecnologia</option>
                <option value="Esportes">Esportes</option>
                <option value="Música">Música</option>
                <option value="Viagens">Viagens</option>
            </select>
            <br><br>
            <button class="btn btn-primary" type="submit">Enviar</button>
        </form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
