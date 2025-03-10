<?php

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $assunto = $_POST['assunto'];
    $mensagem = $_POST['texto'];

    $para = "teste@gmail.com"; //para qual caixa o e-mail vai seguir

    $corpo = "Nome: ".$nome."\n"."E-mail".$email."\n\n"."Mensagem: ".$mensagem;

    //echo $corpo;

    $cabecalho = "From: teste2@gmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP".phpversion();

    if (mail($para, $assunto, $corpo, $cabecalho)) {
        echo ("E-mail enviado com sucesso!");
    }
    else
    {
        echo ("Houve um erro ao enviar o email!");
    }


?>