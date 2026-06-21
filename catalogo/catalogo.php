<!DOCTYPE html>
<html lang="pt-br">

<head>

    <!-- Define a codificação de caracteres -->
    <meta charset="UTF-8">

    <!-- Ícone da aba do navegador -->
    <link rel="icon" href="../assets/img/icone.png">

    <!-- Responsividade -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Título da página -->
    <title>Catálogo - Papiro's</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Arquivos CSS do projeto -->
    <link rel="stylesheet" href="../assets/css/catalogo.css">
    <link rel="stylesheet" href="../assets/css/style.css">

</head>

<body>

    <!-- Cabeçalho do site -->
    <?php include("../header.php"); ?>

    <section class="catalogo">

        <div class="container">

            <h1>Catálogo</h1>

            <?php

            // Conexão com o banco de dados
            include("../conexao.php");

            // Funções do sistema
            include("../funcao.php");

            // Busca todos os produtos cadastrados
            $sql = "SELECT * FROM produto ORDER BY nome_produto";

            $resultado = mysqli_query($conexao, $sql);

            // Armazena os produtos em um array
            $produtos = mysqli_fetch_all($resultado, MYSQLI_ASSOC);

            // Categorias disponíveis para filtro
            $categorias = ["Cadeira", "Mesa", "Armário", "Longarina", "Mocho"];

            // Recebe a categoria selecionada
            $categoriaSelecionada = $_GET['categoria'] ?? '';

            ?>

            <!-- Formulário de filtro -->
            <form class="row g-2 mb-4" method="GET">

                <div class="col-auto">

                    <!-- Lista de categorias -->
                    <select name="categoria" class="form-select">

                        <option value="">Todas as categorias</option>

                        <?php foreach ($categorias as $categoria) { ?>

                            <option value="<?= $categoria ?>"
                                <?= $categoriaSelecionada === $categoria ? 'selected' : '' ?>>

                                <!-- Exibe a categoria e a quantidade de produtos -->
                                <?= $categoria ?> (<?= contarProdutosPorCategoria($produtos, $categoria) ?>)

                            </option>

                        <?php } ?>

                    </select>

                </div>

                <div class="col-auto">

                    <!-- Botão para aplicar o filtro -->
                    <button type="submit" class="btn btn-primary">Filtrar</button>

                </div>

            </form>

            <div class="row">

                <?php

                // Verifica se existem produtos cadastrados
                if (!validarProdutos($produtos)) {

                    echo "<p>Nenhum produto cadastrado.</p>";

                } else {

                    // Filtra os produtos pela categoria escolhida
                    $produtosExibidos = $categoriaSelecionada !== ''
                        ? filtrarProdutosPorCategoria($produtos, $categoriaSelecionada)
                        : $produtos;

                    // Verifica se existem produtos para exibir
                    if (count($produtosExibidos) > 0) {

                        // Percorre os produtos encontrados
                        foreach ($produtosExibidos as $produto) {
                ?>

                        <!-- Card do produto -->
                        <div class="col-12 col-md-6 col-lg-4 mb-4">

                            <div class="catalogo-card">

                                <!-- Imagem do produto -->
                                <div class="catalogo-img">
                                    <img src="../assets/img/<?= $produto['imagem']; ?>"
                                        alt="<?= $produto['nome_produto']; ?>">
                                </div>

                                <!-- Informações do produto -->
                                <div class="catalogo-info">

                                    <h3><?= $produto['nome_produto']; ?></h3>

                                    <p><?= $produto['descricao']; ?></p>

                                </div>

                            </div>

                        </div>

                <?php
                        }

                    } else {

                        // Mensagem caso nenhum produto seja encontrado
                        echo "<p>Nenhum produto encontrado.</p>";
                    }
                }
                ?>

            </div>

        </div>

    </section>

    <!-- Rodapé do site -->
    <?php include("../footer.php"); ?>

    <!-- JavaScript do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>