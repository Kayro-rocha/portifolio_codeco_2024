<?php

$nome = addcslashes($_POST['nome']);
$email = addcslashes($_POST['email']);
$telefone = addcslashes($_POST['telefone']);
$mensagem = addcslashes($_POST['mensagem']);

$para = "kayrorocha09@gmail.com";
$assunto = "Orçamento pelo site Code&Co";

$corpo = "Nome: ".$nome."\n"."E-mail: ".$email."\n"."Telefone: ".$telefone."\n"."Mensagem: ".$mensagem."\n";

$cabeca = "From: codeco.site@gmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer.PHP/".phpversion();

if(mail($para,$assunto,$corpo,$cabeca)) {
    echo("E-mail enviado com sucesso!");
}else {
    echo("Houve um erro ao enviar o email!");
}

?>