<?php
// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coleta os dados do formulário
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $descricao = $_POST['descricao'];
    
    // Configurações para o envio de e-mail
    $to = 'jomaatheus@gmail.com';
    $subject = 'Novo formulário enviado';
    $message = "E-mail: $email\nTelefone: $telefone\nDescrição: $descricao";
    $headers = "From: $email\r\nReply-To: $email\r\n";

    // Envia o e-mail
    if (mail($to, $subject, $message, $headers)) {
        echo "E-mail enviado com sucesso!";
    } else {
        echo "Erro ao enviar o e-mail.";
    }
}
?>
