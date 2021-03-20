<?phpversion();   



if (isset($_POST{'email'}) && !empty($_POST['email'])) {
    $nome = addslashes($_POST['name']);
    $email = addslashes($_POST['email']);
    $mensagem = addslashes($_POST["message"]);



    $to = "muriloborges0202@gmail.com";
    $subject = "Contato Web Developer";
    $body = "Nome: " . $nome . "\n" .
        "Email: " . $email . "\n" .
        "mensagem: " . $mensagem;

    $header = "from:muriloborges088@gmail.com" . "\r\n" .
        "reply-to:" . $email . "\r\n" .
        "X=Mailer:PHP/" . phpversion();


    if (mail($to, $subject, $body, $header)) {
        echo("E-mail enviado com sucesso!");
    } else {
        echo("Desculpe, o E-mail não pode ser enviado");
    }
}


?>