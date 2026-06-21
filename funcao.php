<?php

// Filtra os produtos de uma categoria específica
function filtrarProdutosPorCategoria(array $produtos, string $categoria): array
{

    // Array que armazenará os produtos filtrados
    $filtrados = [];

    // Percorre todos os produtos
    foreach ($produtos as $produto) {

        // Verifica se o nome do produto contém a categoria
        if (stripos($produto['nome_produto'], $categoria) !== false) {

            // Adiciona o produto ao array filtrado
            $filtrados[] = $produto;
        }
    }

    // Retorna os produtos encontrados
    return $filtrados;
}

// Conta quantos produtos existem em uma categoria
function contarProdutosPorCategoria(array $produtos, string $categoria): int
{

    // Retorna a quantidade de produtos filtrados
    return count(filtrarProdutosPorCategoria($produtos, $categoria));
}

// Verifica se os produtos possuem dados válidos
function validarProdutos(array $produtos): bool
{

    // Verifica se o array está vazio
    if (empty($produtos)) {

        return false;
    }

    // Percorre todos os produtos
    foreach ($produtos as $produto) {

        // Verifica se o nome do produto existe e não está vazio
        if (!isset($produto['nome_produto']) || trim($produto['nome_produto']) === '') {

            return false;
        }
    }

    // Retorna verdadeiro se todos os produtos forem válidos
    return true;
}