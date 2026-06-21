<?php

// Recebe a mensagem enviada pelo formulário via POST
$mensagem = $_POST['mensagem'];

// Número de telefone no formato internacional (WhatsApp)
$numero = "5544999900604";

// Monta o texto que será enviado para o WhatsApp
$texto = "Olá! Tenho uma mensagem do site: $mensagem";

// Redireciona o usuário para o WhatsApp com a mensagem pronta
header("Location: https://wa.me/$numero?text=" . urlencode($texto));

// Encerra o script após o redirecionamento
exit;

?>