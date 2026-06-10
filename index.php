<?php

include("conexao.php");

$sql = "SELECT * FROM produto";
$resultado = mysqli_query($conexao, $sql);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">

    <link rel="icon" href="assets/img/icone.png">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Papiro's</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100..900&display=swap" rel="stylesheet">
</head>

<body>

    <?php include("header.php"); ?>
    <?php
       /* $erro = "erro/{$erro}.php";

        //ver se a pg existe
        if (file_exists($erro)) {
            require $erro;
        } else {
            require("erro/erro.php");
        }*/
    ?>

    <section class="banner">

        <picture>
            <source media="(max-width: 576px)" srcset="assets/img/banner-mobile.png">

            <img src="assets/img/banner.png" alt="Banner" class="img-fluid w-100">
        </picture>

        <div class="botoes">

            <a href="./catalogo/catalogo.php" class="botao">
                CATÁLOGO
            </a>

            <a href="./contato/contato.php" class="contato">
                ENTRE EM CONTATOOOOOOOOOO
            </a>

        </div>

    </section>

    <section class="categorias container text-center py-5">

        <h2 class="mb-5">CATEGORIAS</h2>

        <div class="row justify-content-center g-4">

            <?php while($produto = mysqli_fetch_assoc($resultado)) { ?>

                <div class="col-6 col-md-3">

                    <div class="card h-100">

                        <img src="assets/img/<?= $produto['imagem'] ?>"
                             alt="<?= $produto['nome_produto'] ?>">

                        <p><?= $produto['nome_produto'] ?></p>

                    </div>

                </div>

            <?php } ?>

        </div>

    </section>

    <section class="vantagens py-5">

        <div class="container">

            <div class="row justify-content-center g-4">

                <div class="col-12 col-md-6 col-lg-3">

                    <div class="bloco">

                        <img src="assets/img/qualidade.png" alt="qualidade">

                        <div>

                            <h3>QUALIDADE GARANTIDA</h3>

                            <p>Materiais de alta resistência e durabilidade.</p>

                        </div>

                    </div>

                </div>

                <div class="col-12 col-md-6 col-lg-3">

                    <div class="bloco">

                        <img src="assets/img/configuracao.png" alt="design funcional">

                        <div>

                            <h3>DESIGN FUNCIONAL</h3>

                            <p>Produtos pensados para o ambiente escolar.</p>

                        </div>

                    </div>

                </div>

                <div class="col-12 col-md-6 col-lg-3">

                    <div class="bloco">

                        <img src="assets/img/fone.png" alt="atendimento especializado">

                        <div>

                            <h3>ATENDIMENTO ESPECIALIZADO</h3>

                            <p>Soluções personalizadas para sua instituição.</p>

                        </div>

                    </div>

                </div>

                <div class="col-12 col-md-6 col-lg-3">

                    <div class="bloco">

                        <img src="assets/img/confianca.png" alt="confiança">

                        <div>

                            <h3>CONFIANÇA</h3>

                            <p>Mais de 10 anos de experiência no mercado.</p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <?php include("footer.php"); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>