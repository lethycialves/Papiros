<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">

    <link rel="icon" href="../assets/img/icone.png">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Catálogo - Papiro's</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>

    <?php include("../header.php"); ?>

    <section class="container py-5">

        <h1 class="text-center mb-5">Catálogo</h1>

        <div class="row g-4">

            <?php

            include("../conexao.php");

            $sql = "SELECT * FROM produto";

            $resultado = mysqli_query($conexao, $sql);

            if (mysqli_num_rows($resultado) > 0) {

                while ($produto = mysqli_fetch_assoc($resultado)) {
            ?>

                    <div class="col-12 col-md-6 col-lg-4">

                        <div class="card h-100">

                            <img src="../assets/img/<?= $produto['imagem']; ?>"
                                alt="<?= $produto['nome']; ?>">

                            <h3><?= $produto['nome']; ?></h3>

                            <p><?= $produto['descricao']; ?></p>

                        </div>

                    </div>

            <?php
                }
            } else {

                echo "<p class='text-center'>Nenhum produto cadastrado.</p>";
            }

            ?>

        </div>

    </section>

    <?php include("../footer.php"); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>