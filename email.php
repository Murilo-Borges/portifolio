<?php

if(isset($_POST['email]) && !empty($_POST['email]){


$nome = addslashes($_POST['nome']);
$email = addslashes($_POST['email]);
$mensagem = addslashes($_POST['mensagem']);


&to = "muriloborges088@gmail.com";

$subject = "Contato - Murilo Borges";

$body = "Nome: ".$nome. "\n".
        "Email: ".$email."\n".
        "Mensagem: ".$mensagem."\n".
$header = "From:muriloborges0202@gmail.com"."\r\n".
        "replay-to: ".$email."\r\n".
        "X=mailer:PHP/".phpversion();

if(mail($to,$subject,$body,$header)){

    echo("Email enviado com sucesso!");
}else{
    echo("Desculpe, o email não pode ser enviado ");
}
}

?>