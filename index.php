<?php

// --- Tipos de Variáveis ---

$nome = "João"; // String
$idade = 17; // Inteiro
$altura = 1.75; // Float
$casado = false; // Booleano

echo "Seja bem vindo ", $nome, " ao seu primeiro Olá Mundo em PHP!";



// --- Exibindo as Variáveis ---

echo "Nome: ", $nome, "<br>";
echo "Idade: ", $idade, "<br>";
echo "Altura: ", $altura, "<br>";
echo "Casado: ", $casado ? "Sim" : "Não", "<br>";

// --- Funções ---

function ExibirMensagem() {
    echo "Esta é uma mensagem de função!";
}

// Chamando a função
ExibirMensagem();

function Somar($numero1, $numero2) {
    $resultado = $numero1 + $numero2;
    return $resultado;
}

$resultadoSoma = Somar(10, 3);

echo "<br>";

echo "Resultado da soma: ", $resultadoSoma, "<br>";

$nota1 = 8;
$nota2 = 5.5;

function CalcularMedia($nota1, $nota2) {
    $media = ($nota1 + $nota2) / 2; 
    echo "Média: ", $media, "<br>";
}
CalcularMedia($nota1, $nota2);


// --- Estrutura if / else ---

function VerificarMaioridade($idade) {
    if ($idade >= 18) {
        echo "Maior de idade<br>";
    } else  {
        echo "Menor de idade<br>";
    }
}

echo "O ", $nome, " é ", VerificarMaioridade($idade);


// --- Laços de Repetição ---

echo "<br>";
echo "Tabuada do 5:<br>";

for ($i = 0; $i <= 10; $i++) {
    echo "5 x ", $i, " = ", 5 * $i, "<br>";
}
    

?>