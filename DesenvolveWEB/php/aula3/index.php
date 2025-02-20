<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 3</title>
</head>
<body>
    <?php
        const SEPARADOR = "<br>========================<br>";
        define("CONSTANTE", "Olá Mundo!!!");

        echo CONSTANTE."<br>";
        //echo constante;
        echo SEPARADOR;
        const OUTRA_CONSTANTE = CONSTANTE." Adeus Mundo!!!";

        echo OUTRA_CONSTANTE;
        echo SEPARADOR;
        const ANIMAIS = array('cachorro', 'gato', 'pássaro');
        echo "<br>".ANIMAIS[1];
        echo SEPARADOR;
        define("ANIMAIS1", array('cachorro', 'gato', 'pássaro'));
        echo "<br>".ANIMAIS1[0];
        echo SEPARADOR;
        $num = 30;
        if ($num < 20)
        {
            echo "O número $num é menor que 20";
        } else {
            echo "O número $num não é menor que 20";
        }
        echo SEPARADOR;
        $num = 20;
        if ($num < 20)
            {
                echo "O número $num é menor que 20";
            } 
        elseif ($num > 20) 
            {
                echo "O número $num é maior que 20";
            }
        else
            {
                echo "O número $num é igual a 20";
            }
        echo SEPARADOR;
        $i = 1;
        while ($i <= 6)
        {
            echo " $i | ";
            $i++;
        }
        echo SEPARADOR;
        $i = 1;
        while ($i <= 6)
        {
            if ($i == 3) break;
            echo " $i | ";
            $i++;
        }
        echo SEPARADOR;
        $i = 1;
        do {
            echo " $i | ";
            $i++;
        } while ($i <= 6);
        echo SEPARADOR;
        $i = 1;
        do {
            if ($i == 3) break;
            echo " $i | ";
            $i++;
        } while ($i <= 6);
        echo SEPARADOR;

?>
</body>
</html>