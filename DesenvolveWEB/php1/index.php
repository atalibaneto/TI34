<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP: Hypertext Preprocessor</title>
</head>
<body>

<?php 
   /*echo "Olá Mundo!"*/

//phpinfo(); 

$texto = "Sou aluno da TI34 no Senac de Botucatu";
echo $texto;

$divisao = "<br>=============================================<br>";
echo $divisao;
$nome = "Chaves";
$sobrenome = " del Ocho";
echo "Olá, meu nome é $nome e meu sobrenome é $sobrenome.";

/* Ex.1 - Crie um script PHP que declare três variáveis: $nome, $idade e $cidade. Atribua valores a essas variáveis e exiba uma mensagem que combine esses valores.*/
echo $divisao;

$numero1 = 56;
$numero2 = 44;

$soma = $numero1 + $numero2;
echo $soma;
echo "<br>A soma entre $numero1 e $numero2 é $soma";

/*
Operações Aritméticas:
Soma:          +
Subtração:     -
Multiplicação: *
Divisão:       /
*/

/* Ex.2 - Crie um script PHP que declare duas variáveis numéricas, $numero1 e $numero2. Realize as operações de soma, subtração, multiplicação e divisão entre essas variáveis e exiba os resultados. */

/* Ex.3 - Crie um script PHP que declare duas variáveis de string, $primeiroNome e $segundoNome. Concatene essas variáveis para formar o nome completo e exiba o resultado.*/
echo $divisao;
$primeiroNome = "Maria";
$segundoNome = "do Bairro";

$nomeCompleto = $primeiroNome." ".$segundoNome;

echo "Nome completo: $nomeCompleto";

?>

</body>
</html>