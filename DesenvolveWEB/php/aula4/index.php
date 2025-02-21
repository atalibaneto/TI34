<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 4</title>
</head>
<body>
    <?php
    $x = 5;
    $y = "5";
    // Operadores comparação
    // ==, !=, ===, !==, >, <, >= e <=
    var_dump($x === $y);
    echo "<br>";
    echo "\u{1F601}";
    echo "<br>";
    echo '\u{1F601}';
    // Operadores lógicos
    // && (E), || (ou)
    $a = true;
    $b = false;
    echo "<br>";
    var_dump($a || $b);

    $num1 = 5;
    $num2 = 10;
    if (($num1 > 5) && ($num2 < 11))
    {
        echo "<br><br>";
    } else {
        echo "<br><br>Uma das duas condições é falsa";
    }
    //Operadores de atribuição
    //+=, -=, *=, /=, %=
    echo "<br>".$num1 += $num2;
    echo "<br>".$num1 -= $num2;
    echo "<br>".$num1 *= $num2;
    echo "<br>".$num1 /= $num2;
    echo "<br>".$num1 %= $num2;

    //Função rand() retorna números aleatórios

    echo "<br>".rand(1,6);
    echo "<br>".rand();

    /*abs() - valor absoluto
      base_convert()
      ceil(), floor(), round() - arredondamentos
      hypot() - hipotenusa
      Intdiv() - divisão inteiro
      min(), max()
      sqrt()
    */
echo "<br>".abs($num2-$num1);
$binario = "1010";
$decimal = base_convert($binario, 2, 10);
echo "<br>".$decimal;
$arredondarCima = 3.2;
echo "<br>".ceil($arredondarCima);
$arredondarBaixo = 3.9;
echo "<br>".floor($arredondarBaixo);
$arredondar = 3.14159;
echo "<br>".round($arredondar);
echo "<br>".round($arredondar, 2);
echo "<br>".hypot($num1, $num2);
echo "<br>".intdiv($num1,$num2);
$raizQuadrada = 144;
echo "<br>".sqrt($raizQuadrada);
    ?>
</body>
</html>