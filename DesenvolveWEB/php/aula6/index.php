<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 6</title>
</head>
<body>
    <?php
        $valor = $_GET['valor'] ?? NULL;
    ?>
    <h2>Digite um número para a tabuada</h2>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="get">
     <input type="number" name="valor" value="<?php echo $valor ?>"><br>
     <button type="submit">Enviar</button>
    </form>
     <?php 
             if ($valor != 0) {
     echo "<h2>Resultado da tabuada</h2>";
     }
     ?>
     <?php
        if ($valor != 0) {
            for ($i = 0; $i <= 10; $i++)
            {
                echo "$valor x $i = ".($valor * $i)."<br>";
            }
    };
     ?>
</body>
</html>