<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recolher os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $descricao = $_POST['descricao'];

    // Configurar os detalhes do e-mail
    $destinatario = "jomaatheus@gmail.com";
    $assunto = "Novo formulário enviado";
    $mensagem = "Nome: $nome\n";
    $mensagem .= "E-mail: $email\n";
    $mensagem .= "Telefone: $telefone\n";
    $mensagem .= "Descrição: $descricao\n";

    // Enviar o e-mail
    mail($destinatario, $assunto, $mensagem);

    // Redirecionar de volta para a página do formulário
    header("Location: index.html");
    exit;
}
?>
