<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 2</title>
</head>
<body>
    <?php
        $primeiroNome = "Maria";
        $segundoNome = "do Bairro";

        $nomeCompleto = $primeiroNome." ".$segundoNome;

        echo "Nome completo: $nomeCompleto";
    ?>
    <?php
        $separador = "<br>=============================================<br>";
        echo $separador;
        echo "Exemplo de incremento e decremento";
        $numero = 10;

        echo "<br>valor da variável: $numero<br>";

        $numero++;
        echo "valor após o incremento: $numero<br>";

        $numero--;
        echo "valor após o decremento: $numero<br>";
    ?>
    <?php
        echo $separador;
        echo "Exemplo de resultado com resto da divisão<br>";
        $numero1 = 20;
        $numero2 = 2;
        $resto = $numero1 % $numero2;
        echo "O resto da divisão de $numero1 por $numero2 é: $resto";

        echo $separador;
        echo "Exemplo de potenciação<br>";
        $base = 2;
        $expoente = 3;
        $potencia = $base ** $expoente;
        echo "$base elevado a $expoente é: $potencia";

        echo $separador;
        echo "Exemplo de troca de valores com variáveis<br>";
        $a = 10;
        $b = 20;

        echo "Valores originais: a = $a, b = $b <br>";

        $a = $a + $b;
        $b = $a - $b;
        $a = $a - $b;

        echo "Valores trocados: a = $a, b = $b <br>";
    ?>

</body>
</html>