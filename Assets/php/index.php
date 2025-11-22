<?php
// Pegando os dados enviados pelo formulário
$nome = $_POST['nome'] ?? '';
$email = $_POST['email'] ?? '';
$servico = $_POST['servico'] ?? '';
$mensagem = $_POST['mensagem'] ?? '';

// Exemplo: só mostrar na tela
echo "<h1>Agendamento recebido!</h1>";
echo "<p><strong>Nome:</strong> $nome</p>";
echo "<p><strong>Email:</strong> $email</p>";
echo "<p><strong>Serviço:</strong> $servico</p>";
echo "<p><strong>Mensagem:</strong> $mensagem</p>";
?>
