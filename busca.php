<?php

// Conecta ao banco de dados
include("conexao.php");

// Recebe o texto digitado na busca
$busca = $_GET["busca"] ?? "";

// Array que armazenará os produtos encontrados
$produtos = [];

// Executa a busca apenas se houver texto digitado
if ($busca !== "") {

    // Consulta os produtos pelo nome
    $sql = "SELECT * FROM produto WHERE nome_produto LIKE ? ORDER BY nome_produto";

    // Prepara a consulta SQL
    $stmt = mysqli_prepare($conexao, $sql);

    // Adiciona os caracteres curingas para a pesquisa
    $like = "%" . $busca . "%";

    // Associa o valor à consulta
    mysqli_stmt_bind_param($stmt, "s", $like);

    // Executa a consulta
    mysqli_stmt_execute($stmt);

    // Obtém o resultado da consulta
    $resultado = mysqli_stmt_get_result($stmt);

    // Armazena os produtos encontrados em um array
    $produtos = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <!-- Define a codificação de caracteres -->
    <meta charset="UTF-8">

    <!-- Ícone da aba do navegador -->
    <link rel="icon" href="assets/img/icone.png">

    <!-- Responsividade -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Título da página -->
    <title>Buscar - Papiro's</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Arquivos CSS do projeto -->
    <link rel="stylesheet" href="assets/css/catalogo.css">
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

    <!-- Cabeçalho do site -->
    <?php include("header.php"); ?>

    <!-- Seção de resultados da busca -->
    <section class="catalogo">

        <div class="container">

            <h1>Resultado da busca</h1>

            <?php if ($busca !== "" && count($produtos) === 0) { ?>

                <!-- Mensagem quando nenhum produto é encontrado -->
                <p>Nenhum produto encontrado para "<?= htmlspecialchars($busca) ?>".</p>

            <?php } elseif ($busca === "") { ?>

                <!-- Mensagem quando nenhuma busca foi realizada -->
                <p>Digite um termo no campo de busca para encontrar produtos.</p>

            <?php } ?>

            <div class="row">

                <?php foreach ($produtos as $produto) { ?>

                    <!-- Card de cada produto encontrado -->
                    <div class="col-12 col-md-6 col-lg-4 mb-4">

                        <div class="catalogo-card">

                            <!-- Imagem do produto -->
                            <div class="catalogo-img">
                                <img src="assets/img/<?= $produto['imagem']; ?>"
                                    alt="<?= $produto['nome_produto']; ?>">
                            </div>

                            <!-- Informações do produto -->
                            <div class="catalogo-info">

                                <h3><?= $produto['nome_produto']; ?></h3>

                                <p><?= $produto['descricao']; ?></p>

                            </div>

                        </div>

                    </div>

                <?php } ?>

            </div>

        </div>

    </section>

    <!-- Rodapé do site -->
    <?php include("footer.php"); ?>

    <!-- JavaScript do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>