<?php
/*MÁQUINA VIRTUAL
$host = "192.168.56.10";
$user = "lethycia";
$senha = "789456";
$db = "projeto_papiros";

$conexao = new mysqli($host, $user, $senha, $db);

if ($conexao->connect_error) {
    die("Falha na conexão: " . $conexao->connect_error);
}
*/

/*MÁQUINA LOCAL*/
$host = "localhost";
$user = "root";
$senha = "";
$db = "projeto_papiros";

$conexao = new mysqli($host, $user, $senha, $db);

if ($conexao->connect_error) {
    die("Falha na conexão: " . $conexao->connect_error);
}