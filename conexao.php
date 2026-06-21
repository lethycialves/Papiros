<?php

// IP do servidor do banco de dados
$host = "192.168.56.10";

// Usuário do banco de dados
$user = "lethycia";

// Senha do banco de dados
$senha = "789456";

// Nome do banco de dados
$db = "projeto_papiros";

// Cria a conexão com o banco
$conexao = new mysqli($host, $user, $senha, $db);

// Verifica se ocorreu erro na conexão
if ($conexao->connect_error) {

    // Exibe a mensagem de erro e encerra o programa
    die("Falha na conexão: " . $conexao->connect_error);
}