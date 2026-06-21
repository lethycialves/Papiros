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
    <title>Contato - Papiro's</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Arquivos CSS da página -->
    <link rel="stylesheet" href="../assets/css/contato.css">
    <link rel="stylesheet" href="../assets/css/style.css">

</head>

<body>

    <!-- Cabeçalho do site -->
    <?php include("../header.php"); ?>

    <!-- Conteúdo principal da página -->
    <main class="container py-5">

        <h1 class="mb-4">Entre em Contato</h1>

        <!-- Formulário de contato -->
        <form action="enviar.php" method="POST">

            <!-- Campo para o nome -->
            <div class="mb-3">
                <label class="form-label">Nome Completo</label>
                <input type="text" class="form-control" name="nome" required>
            </div>

            <!-- Campo para o e-mail -->
            <div class="mb-3">
                <label class="form-label">E-mail</label>
                <input type="email" class="form-control" name="email" required>
            </div>

            <!-- Campo para o WhatsApp -->
            <div class="mb-3">
                <label class="form-label">WhatsApp</label>
                <input type="tel" class="form-control" name="whatsapp" required>
            </div>

            <!-- Campo para a mensagem -->
            <div class="mb-3">
                <label class="form-label">Mensagem</label>
                <textarea class="form-control" name="mensagem" rows="5" required></textarea>
            </div>

            <!-- Botão para enviar o formulário -->
            <button type="submit" class="btn btn-primary">
                Enviar
            </button>

        </form>

    </main>

    <!-- Rodapé do site -->
    <?php include("../footer.php"); ?>

    <!-- JavaScript do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>