<!-- Cabeçalho do site -->
<header>

    <!-- Barra de navegação -->
    <nav class="navbar navbar-expand-lg">

        <div class="container">

            <!-- Logo com link para a página inicial -->
            <a class="navbar-brand" href="http://papiros.local:8080/index.php">

                <img src="http://papiros.local:8080/assets/img/logo.png" alt="Logo Papiro's">

            </a>

            <!-- Botão do menu para dispositivos móveis -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu"
                aria-controls="menu" aria-expanded="false">

                <span class="navbar-toggler-icon"></span>

            </button>

            <!-- Conteúdo recolhível do menu -->
            <div class="collapse navbar-collapse justify-content-lg-end" id="menu">

                <!-- Lista de links de navegação -->
                <ul class="navbar-nav text-center">

                    <!-- Link para a página inicial -->
                    <li class="nav-item">
                        <a class="nav-link" href="http://papiros.local:8080/index.php">
                            Início
                        </a>
                    </li>

                    <!-- Link para a página sobre -->
                    <li class="nav-item">
                        <a class="nav-link" href="http://papiros.local:8080/sobre/sobre.php">
                            Sobre
                        </a>
                    </li>

                    <!-- Link para o catálogo -->
                    <li class="nav-item">
                        <a class="nav-link" href="http://papiros.local:8080/catalogo/catalogo.php">
                            Catálogo
                        </a>
                    </li>

                    <!-- Link para contato -->
                    <li class="nav-item">
                        <a class="nav-link" href="http://papiros.local:8080/contato/contato.php">
                            Contato
                        </a>
                    </li>

                </ul>

                <!-- Formulário de busca -->
                <form class="d-flex ms-lg-3 mt-3 mt-lg-0" action="http://papiros.local:8080/busca.php" method="GET">

                    <!-- Campo para digitar a pesquisa -->
                    <input class="form-control" type="search" name="busca" placeholder="Buscar produto...">

                    <!-- Botão para enviar a busca -->
                    <button class="btn btn-outline-secondary ms-2" type="submit">
                        Buscar
                    </button>

                </form>

            </div>

        </div>

    </nav>

</header>