<?php
// Entradas
$curso = readline("Informe o curso: ");
$cargaHoraria = readline("Qual a carga horária: ");

// Processamento
$faltasPermitidas = $cargaHoraria * 0.30;

// outras formas de Saída
//echo "Faltas permitidas é: ".$faltasPermitidas;

//Saída
echo "Curso: ".$curso."\n";
echo "Carga horária: ".$cargaHoraria."h \n";
echo "Limite de faltas: ".$faltasPermitidas."h \n";

// \n é usado para criar "quebras", ou "novas linhas" dentro de uma saída de texto.