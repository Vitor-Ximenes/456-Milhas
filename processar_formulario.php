<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $assunto = 'Assunto do Email';
    $mensagem = 'Conteúdo do Email';
    $remetente = 'seu_email@dominio.com';

    // Adicione cabeçalhos adicionais, como o remetente
    $headers = "From: $remetente\r\n";
    $headers .= "Reply-To: $remetente\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    // Tente enviar o email
    if (mail($email, $assunto, $mensagem, $headers)) {
        echo "<script>alert('Email enviado com sucesso para $email');</script>";
    } else {
        echo "<script>alert('Falha ao enviar o email');</script>";
    }
}
