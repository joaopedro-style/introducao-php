<?php
// Entradas (direta, atribuída)
$produto = readline("Informe o produto: ");
$precoInicial = readline("Preço inicial: ");
$desconto = readline("Desconto em reais: ");

// processamento
$precoFinal = $precoInicial - $desconto;

// saída concatenada [O preço final é: valor]
// O preço final é: valor
echo "O preço final é: ".$precoFinal;