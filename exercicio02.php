<?php
/* Condicionais: ESCOLHA/CASO/OUTROCASO/INTERROMPA 
				SWITCH/CASE/DEFAULT/BREAK */

/* Protótipo de Chatbot */

echo "\n*** Chatbot da empresa Biribinha Tecnologia ***\n";
echo "\nOpções disponíveis:\n\n";
echo "1 -> Informações\n";
echo "2 -> Reclamação\n";
echo "3 -> Elogios\n";
echo "4 -> Status\n";

echo "\n";

$opcao = readline("Digite uma opção: ");

// Condicional Encadeada
switch($opcao){
	case 1: 
		$acao = "Legal, o que deseja saber? 😊";
		break;	
	case 2:
		$acao = "Puxa, que pena... O que houve? 🙁";		
		break;
	case 3:
		$acao = "Bacana! Pode falar 💕";
		break;
	case 4:
		$acao = "Ok, um momento... ⏳";		
		break;
	default:
		$acao = "Não entendi... 🧐 vou chamar um atendente. ";
		break;
}

echo "\n-------------------------\n";
echo $acao;
echo "\n-------------------------\n";
