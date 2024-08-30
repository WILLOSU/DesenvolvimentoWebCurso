<?php
function sendEmail($destinatarios = "", $cc = "", $assunto = "", $mensagem = ""){
    echo "Destinatários: ".$destinatarios."<br>";
    echo "CC: ".$cc."<br>";
    echo "Assunto: ".$assunto."<br>";
    echo "Mensagem: ".$mensagem."<br>";
}

sendEmail(
    assunto: "Argumentos Nomeados",
    destinatarios: "completowebteste@gmail.com",
    mensagem: "Dominando a feature de argumentos nomeados do PHP 8"
);

echo "<hr>";

/*convencional -> respeitando a ordem dos parâmetros */



sendEmail(
    "completowebteste@gmail.com",
    "completowebteste@gmail.com",
    "Argumentos Nomeados",
    "Dominando a feature de argumentos nomeados do PHP 8"
);

echo "<hr>";

sendEmail(
    "completowebteste@gmail.com",
    "Argumentos Nomeados",
    "Dominando a feature de argumentos nomeados do PHP 8"
);

?>
