// 1

<?php
echo "Digite o primeiro número: ";
$n1 = trim(fgets(STDIN));
echo "Digite o segundo número: ";
$n2 = trim(fgets(STDIN));

if ($n1 > $n2) {
    echo "O maior número é: $n1\n";
} else {
    echo "O maior número é: $n2\n";
}
?>

//2

<?php
echo "Digite um número: ";
$num = trim(fgets(STDIN));

if ($num >= 0) {
    echo "O número é positivo\n";
} else {
    echo "O número é negativo\n";
}
?>

//3

<?php
echo "Digite uma letra (F ou M): ";
$letra = trim(fgets(STDIN));

if ($letra == 'F' || $letra == 'f') {
    echo "Feminino\n";
} elseif ($letra == 'M' || $letra == 'm') {
    echo "Masculino\n";
} else {
    echo "Sexo inválido\n";
}
?>

//4

<?php
echo "Digite uma letra: ";
$letra = strtolower(trim(fgets(STDIN)));

if (in_array($letra, ['a', 'e', 'i', 'o', 'u'])) {
    echo "A letra é uma vogal\n";
} else {
    echo "A letra é uma consoante\n";
}
?>

//5

<?php
echo "Digite a primeira nota: ";
$nota1 = trim(fgets(STDIN));
echo "Digite a segunda nota: ";
$nota2 = trim(fgets(STDIN));

$media = ($nota1 + $nota2) / 2;

if ($media == 10) {
    echo "Aprovado com Distinção\n";
} elseif ($media >= 7) {
    echo "Aprovado\n";
} else {
    echo "Reprovado\n";
}
?>

//6

<?php
echo "Digite o primeiro número: ";
$n1 = trim(fgets(STDIN));
echo "Digite o segundo número: ";
$n2 = trim(fgets(STDIN));
echo "Digite o terceiro número: ";
$n3 = trim(fgets(STDIN));

$maior = max($n1, $n2, $n3);
echo "O maior número é: $maior\n";
?>

//7

<?php
echo "Digite o primeiro número: ";
$n1 = trim(fgets(STDIN));
echo "Digite o segundo número: ";
$n2 = trim(fgets(STDIN));
echo "Digite o terceiro número: ";
$n3 = trim(fgets(STDIN));

$maior = max($n1, $n2, $n3);
$menor = min($n1, $n2, $n3);

echo "O maior número é: $maior\n";
echo "O menor número é: $menor\n";
?>

//8

<?php
echo "Digite o preço do primeiro produto: ";
$p1 = trim(fgets(STDIN));
echo "Digite o preço do segundo produto: ";
$p2 = trim(fgets(STDIN));
echo "Digite o preço do terceiro produto: ";
$p3 = trim(fgets(STDIN));

$menor = min($p1, $p2, $p3);

echo "Você deve comprar o produto de preço: $menor\n";
?>

//9

<?php
echo "Digite o primeiro número: ";
$n1 = trim(fgets(STDIN));
echo "Digite o segundo número: ";
$n2 = trim(fgets(STDIN));
echo "Digite o terceiro número: ";
$n3 = trim(fgets(STDIN));

$numeros = [$n1, $n2, $n3];
rsort($numeros);

echo "Os números em ordem decrescente são: " . implode(', ', $numeros) . "\n";
?>

//10

<?php
echo "Digite o turno em que você estuda (M-matutino, V-vespertino, N-noturno): ";
$turno = strtoupper(trim(fgets(STDIN)));

switch ($turno) {
    case 'M':
        echo "Bom dia!\n";
        break;
    case 'V':
        echo "Boa Tarde!\n";
        break;
    case 'N':
        echo "Boa Noite!\n";
        break;
    default:
        echo "Valor inválido\n";
}
?>

//11

<?php
echo "Digite o salário atual: ";
$salario = trim(fgets(STDIN));

if ($salario <= 280) {
    $percentual = 20;
} elseif ($salario <= 700) {
    $percentual = 15;
} elseif ($salario <= 1500) {
    $percentual = 10;
} else {
    $percentual = 5;
}

$aumento = $salario * ($percentual / 100);
$novo_salario = $salario + $aumento;

echo "Salário antes do reajuste: R$ $salario\n";
echo "Percentual de aumento aplicado: $percentual%\n";
echo "Valor do aumento: R$ $aumento\n";
echo "Novo salário: R$ $novo_salario\n";
?>

//12

<?php
echo "Digite seu peso (em kg): ";
$peso = trim(fgets(STDIN));
echo "Digite sua altura (em metros): ";
$altura = trim(fgets(STDIN));

$imc = $peso / ($altura * $altura);

if ($imc < 18.5) {
    echo "Abaixo do peso\n";
} elseif ($imc < 24.9) {
    echo "Peso normal\n";
} elseif ($imc < 29.9) {
    echo "Sobrepeso\n";
} else {
    echo "Obesidade\n";
}
?>

//13

<?php
echo "Digite um número inteiro: ";
$num = trim(fgets(STDIN));
$e_primo = true;

if ($num < 2) {
    $e_primo = false;
} else {
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            $e_primo = false;
            break;
        }
    }
}

if ($e_primo) {
    echo "O número $num é primo\n";
} else {
    echo "O número $num não é primo\n";
}
?>

//14

<?php
echo "Digite a temperatura em graus Celsius: ";
$celsius = trim(fgets(STDIN));

$fahrenheit = ($celsius * 9/5) + 32;

echo "A temperatura em Fahrenheit é: $fahrenheit\n";
?>

//15

<?php
echo "Digite um número positivo: ";
$num = trim(fgets(STDIN));

for ($i = $num; $i >= 0; $i--) {
    echo "$i\n";
}
?>