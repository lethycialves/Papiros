<?php

include("conexao.php");

$busca = $_GET["busca"] ?? "";

$produtos = [];

if ($busca !== "") {

    $sql = "SELECT * FROM produto WHERE nome_produto LIKE ? ORDER BY nome_produto";

    $stmt = mysqli_prepare($conexao, $sql);

    $like = "%" . $busca . "%";

    mysqli_stmt_bind_param($stmt, "s", $like);

    mysqli_stmt_execute($stmt);

    $resultado = mysqli_stmt_get_result($stmt);

    $produtos = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">

    <link rel="icon" href="assets/img/icone.png">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Buscar - Papiro's</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/catalogo.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <?php include("header.php"); ?>

    <section class="catalogo">

        <div class="container">

            <h1>Resultado da busca</h1>

            <?php if ($busca !== "" && count($produtos) === 0) { ?>

                <p>Nenhum produto encontrado para "<?= htmlspecialchars($busca) ?>".</p>

            <?php } elseif ($busca === "") { ?>

                <p>Digite um termo no campo de busca para encontrar produtos.</p>

            <?php } ?>

            <div class="row">

                <?php foreach ($produtos as $produto) { ?>

                    <div class="col-12 col-md-6 col-lg-4 mb-4">

                        <div class="catalogo-card">

                            <div class="catalogo-img">
                                <img src="assets/img/<?= $produto['imagem']; ?>"
                                    alt="<?= $produto['nome_produto']; ?>">
                            </div>

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

    <?php include("footer.php"); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>