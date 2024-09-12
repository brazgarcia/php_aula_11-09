<?php // Inicializar o arquivo php.

// No php as variáveis são fracamente tipadas (dinâmicas)
// Toda variável começa com $ e não pode ter acentos ou caractere especiais.
$palavra;

// Podemos adicionar/alterar conteúdo em uma variável criada com o =
$palavra = "Vamos para o Intervalo?";

// Para exibir o conteúdo da variável, usamos echo.
echo $palavra;
echo "<br>";

$anoAtual = 2024;
$altura = 1.77;
$texto = "R$1.81";

// Para juntar duas variáveis ou texto com variável
// Usamos o . para concatenar (juntar)
echo $palavra . $anoAtual;
echo "<br>";
echo "Altura: " . $altura;
echo "<br>";

// Como fazer contas 

$numero1 = 10;
$numero2 = 5;

$soma = $numero1 + $numero2;
echo "A soma é: " . $soma . "<br>";

$subtracao = $numero1 - $numero2;
echo "A subtração é: " . $subtracao . "<br>";

$multiplicacao = $numero1 * $numero2;
echo "A multiplicação é: " . $multiplicacao . "<br>";

$divisao = $numero1 / $numero2;
echo "A divisão é: " . $divisao . "<br>";

// A partir de uma variável chamada Celsius, converta o valor recebido para Farenheit
// Fórmula: F = C * 1,8 + 32
// Teste: 37ºC deve apresentar 98,6ºF

$celsius = 37;

$farenheit = $celsius * 1.8 + 32;
echo "A conversão de 37ºC para Farenheit é: " . $farenheit . "ºF. <br>";

// Crie uma variável chamada valorInicial e uma chamada procentagem.
// Calcule a procentagem do valorInicial e apresente o resultado.
// Teste: Inicial = 100; Porcentagem = 10; resultado = 10.

$valorInicial = 100; $porcentagem = 10;

$resultado = $valorInicial * ($porcentagem / 100);
echo "A porcentagem de " . $porcentagem . "% em cima de " . $valorInicial . " é: " . $resultado . "% <br>";

// Estrutura de decisão 
// Sempre que houver opções, utilizaremos uma estrutura de decião

$anoNascimento = 1994; 

$idade = $anoAtual - $anoNascimento;
echo "Minha idade é: " . $idade . "<br>";

if ($idade >= 18) {
    echo "você é obrigado a votar! <br>";
} else if ($idade >= 16) {
    echo "A votação é facultativa <br>";
} else {
    echo "não pode votar! <br>";
}

// Armazene 3 notas de um aluno, apresente a média e:
// Se a nota for maior ou igual a 7 o aluno será aprovado;
// Se a nota for menor o launo será reprovado.

$prova1 = 5; $prova2 = 7; $prova3 = 6;

$media = ($prova1 + $prova2 + $prova3) / 3;

if ($media => 7) {
    echo "O aluno foi reprovado com média: " . $media . "<br>";
} else {
    echo "O aluno foi reprovado com média: " . $media . "<br>";
}

// Receba um número de 1 a 7 e apresente qual dia da semana ele representa:
// 1 => Domingo 
// 2 => Segunda...
// Apresente uma mensagem de erro caso o número não esteja entre 1 e 7 ou seja texto.

