<?php
/* Condicionais: se, então, senão, senão se, fim-se */

/* Protótipo de Chatbot */

echo "\n*** Chatbot da empresa Biribinha Tecnologia ***\n";
echo "Opções disponíveis:\n\n";
echo "1 -> Informações\n";
echo "2 -> Reclamações\n";
echo "3 -> Elogios\n";
echo "4 -> Status\n";

echo "\n";

$opcao = readline("Digite uma opção: ");

// teste de entrada
//echo "\n".$opcao;

// Condicional Encadeada
if($opcao == 1){
	$acao = "Legal, o que deja saber? 😊";
} elseif($opcao == 2){
	$acao = "Puxa, que pena... o que houve? 🙁";
} elseif($opcao == 3){
	$acao = "Bacana! pode falar 💕";
} elseif($opcao == 4){
	$acao = "OK, um momento... ⏳";
}else {
	$acao = "Não entendi... 🧐 vou chamar um atendente.";
}

echo "\n------------------------\n";
echo $acao;
echo "\n------------------------\n";