<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 5 - For</title>
</head>
<body>
    <h2>Tabuada do 7 utilizando for</h2>
    <?php
        $num = 7;
        for ($i = 0; $i <= 10; $i++)
        {
            echo "$num x $i = ".$num * $i."<br>";
        }
    ?>
    <h2>Foreach</h2>
    <?php
        $carros = array("Fusca", "Brasília", "Kombi", "Uno com escada", "Fiat 147");

        foreach ($carros as $x) {
            echo "$x <br>";
            echo "<br>".var_dump($x);
        }
    ?>
    <h2>Foreach com array associativo</h2>
    <?php
        $alunos = array (
            "João" => 8.5,
            "Maria" => 9.0,
            "Pedro" => 7.5,
            "Ana" => 10.0,
            "Carlos" => 6.0
        );
        foreach ($alunos as $nome => $nota) {
            echo "$nome tirou a nota: $nota<br>";
        }
    ?>
    <a href="formulario.html">Formulário</a>

</body>
</html>