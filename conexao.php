<?php

$host = "192.168.56.10";//ip  do banco de dados
$user = "lethycia";
$senha = "789456";
$db = "projeto_papiros";

$conexao = new mysqli($host, $user, $senha, $db);

if ($conexao->connect_error) {
    die("Falha na conexão: " . $conexao->connect_error);
}
