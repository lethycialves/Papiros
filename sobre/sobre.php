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
    <title>Sobre - Papiro's</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Arquivos CSS da página -->
    <link rel="stylesheet" href="../assets/css/sobre.css">
    <link rel="stylesheet" href="../assets/css/style.css">

</head>

<body>

    <!-- Cabeçalho do site -->
    <?php include("../header.php"); ?>

    <!-- Seção sobre a empresa -->
    <section class="sobre container py-5">

        <!-- Título e introdução -->
        <div class="text-center mb-5">
            <h1>Sobre Nós</h1>

            <p class="lead">
                Conheça a história e os valores da Papiro's.
            </p>
        </div>

        <!-- Conteúdo principal (imagem + texto) -->
        <div class="row align-items-center g-5">

            <!-- Imagem da equipe -->
            <div class="col-lg-6">
                <img src="../assets/img/sobre.png" alt="Equipe da Papiro's" class="img-fluid">
            </div>

            <!-- Texto da história -->
            <div class="col-lg-6 historia">

                <h2>Nossa História</h2>

                <p>
                    A <strong>Papiros</strong> é especializada em móveis escolares,
                    oferecendo produtos que unem qualidade, resistência e conforto
                    para instituições de ensino.
                </p>

                <p>
                    Nosso compromisso é proporcionar ambientes mais organizados,
                    funcionais e adequados para o aprendizado, atendendo escolas,
                    universidades e projetos educacionais.
                </p>

                <p>
                    Trabalhamos com dedicação, responsabilidade e atendimento
                    personalizado, buscando sempre a satisfação e a confiança
                    dos nossos clientes.
                </p>

            </div>

        </div>

        <!-- Seção de missão, visão e valores -->
        <div class="row text-center mt-5">

            <!-- Missão -->
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body">
                        <h3>🎯 Missão</h3>
                        <p>
                            Fornecer mobiliário escolar de qualidade,
                            contribuindo para ambientes educacionais mais
                            eficientes e confortáveis.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Visão -->
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body">
                        <h3>👁️ Visão</h3>
                        <p>
                            Ser referência no segmento de móveis escolares,
                            reconhecida pela qualidade e excelência no atendimento.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Valores -->
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body">
                        <h3>🤝 Valores</h3>
                        <p>
                            Compromisso, qualidade, ética, confiança e respeito
                            em todas as relações com nossos clientes.
                        </p>
                    </div>
                </div>
            </div>

        </div>

    </section>

    <!-- Rodapé do site -->
    <?php include("../footer.php"); ?>

    <!-- JavaScript do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>