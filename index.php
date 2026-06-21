<?php

// Inclui a conexão com o banco de dados
include("conexao.php");

// Inclui as funções do sistema
include("funcao.php");

// Busca todos os produtos cadastrados
$sql = "SELECT * FROM produto";
$resultado = mysqli_query($conexao, $sql);

// Array que armazenará os produtos
$produtos = [];

// Adiciona cada produto ao array
while ($linha = mysqli_fetch_assoc($resultado)) {
    $produtos[] = $linha;
}

// Categorias que serão exibidas na página inicial
$categoriasHome = ["Cadeira", "Mesa", "Armário", "Longarina"];

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <!-- Define o padrão de caracteres -->
    <meta charset="UTF-8">

    <!-- Ícone da aba do navegador -->
    <link rel="icon" href="assets/img/icone.png">

    <!-- Responsividade -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Título da página -->
    <title>Papiro's</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS do projeto -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Fontes do Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Fonte Roboto -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100..900&display=swap" rel="stylesheet">

</head>

<body>

    <!-- Cabeçalho do site -->
    <?php include("header.php"); ?>

    <!-- Banner principal -->
    <section class="banner">

        <!-- Imagem diferente para celular -->
        <picture>
            <source media="(max-width: 576px)" srcset="assets/img/banner-mobile.png">

            <img src="assets/img/banner.png" alt="Banner" class="img-fluid w-100">
        </picture>

        <!-- Botões do banner -->
        <div class="botoes">

            <!-- Link para catálogo -->
            <a href="./catalogo/catalogo.php" class="botao">
                CATÁLOGO
            </a>

            <!-- Link para contato -->
            <a href="./contato/contato.php" class="contato">
                ENTRE EM CONTATO
            </a>

        </div>

    </section>

    <!-- Seção de categorias -->
    <section class="categorias container text-center py-5">

        <h2 class="mb-5">CATEGORIAS</h2>

        <div class="row justify-content-center g-4">

            <?php

            // Percorre todas as categorias
            foreach ($categoriasHome as $categoria) {

                // Filtra os produtos da categoria
                $produtosCategoria = filtrarProdutosPorCategoria($produtos, $categoria);

                // Exibe apenas se houver produtos
                if (count($produtosCategoria) > 0) {

                    // Pega o primeiro produto como exemplo
                    $exemplo = $produtosCategoria[0];
            ?>

                <div class="col-6 col-md-3">

                    <!-- Link para o catálogo filtrado -->
                    <a href="./catalogo/catalogo.php?categoria=<?= $categoria ?>" class="text-decoration-none text-dark">

                        <div class="card h-100">

                            <!-- Imagem da categoria -->
                            <img src="assets/img/<?= $exemplo['imagem'] ?>"
                                 alt="<?= $categoria ?>">

                            <!-- Nome da categoria -->
                            <p><?= $categoria ?></p>

                        </div>

                    </a>

                </div>

            <?php } } ?>

        </div>

    </section>

    <!-- Seção de vantagens -->
    <section class="vantagens py-5">

        <div class="container">

            <div class="row justify-content-center g-4">

                <!-- Vantagem 1 -->
                <div class="col-12 col-md-6 col-lg-3">

                    <div class="bloco">

                        <img src="assets/img/qualidade.png" alt="qualidade">

                        <div>

                            <h3>QUALIDADE GARANTIDA</h3>

                            <p>Materiais de alta resistência e durabilidade.</p>

                        </div>

                    </div>

                </div>

                <!-- Vantagem 2 -->
                <div class="col-12 col-md-6 col-lg-3">

                    <div class="bloco">

                        <img src="assets/img/configuracao.png" alt="design funcional">

                        <div>

                            <h3>DESIGN FUNCIONAL</h3>

                            <p>Produtos pensados para o ambiente escolar.</p>

                        </div>

                    </div>

                </div>

                <!-- Vantagem 3 -->
                <div class="col-12 col-md-6 col-lg-3">

                    <div class="bloco">

                        <img src="assets/img/fone.png" alt="atendimento especializado">

                        <div>

                            <h3>ATENDIMENTO ESPECIALIZADO</h3>

                            <p>Soluções personalizadas para sua instituição.</p>

                        </div>

                    </div>

                </div>

                <!-- Vantagem 4 -->
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

    <!-- Rodapé do site -->
    <?php include("footer.php"); ?>

    <!-- JavaScript do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>