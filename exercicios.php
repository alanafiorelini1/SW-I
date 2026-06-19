<?php
//Exercício 11
$num1 = 3;
$num2 = 9;
echo " Exercício 11 <br> A multiplicação do número $num1 e do $num2 é igual a: " . $num1 * $num2 ;
echo "<br>";

//Exercício 12
$num3 = 8;
$num4 = 4;
echo "<br> Exercício 12 <br> A divisão de $num3 e $num4 é: " . $num3 / $num4;
echo "<br>";

//Exercício 13
$num5 = -1;
if ($num5>=0){
    echo"<br>Exercício 13 <br> O número $num5 é positivo.";
}   if($num5<0){
    echo"<br> Exercício 13 <br> O número é $num5 é negativo";
} echo "<br>";

//Exercício 14
$num6 = 15;
if($num6 % 2 === 0){
    echo "<br> Exercício 14 <br> O número $num6 é par.";
}
else{
    echo"<br> Exercício 14 <br> O número $num6 é ímpar.";
} echo "<br>";

//Exercício 15
$num7 = 21;
$num8 = 4;
$num9 = 12;

echo"<br>Exercício 15<br>A soma dos números $num7,$num8 e $num9 é: ".$num7+$num8+$num9;
echo"<br>";

//Exercício 16
$num10 = 56;
$num11 = 67;

echo "<br>Exercício 16<br> A média dos números é: " . ($num10 + $num11) / 2;
echo"<br>";

//Exercício 17
$num12 = -32;
$num13 = 12;

if($num12>$num13){
    echo"<br>Exercício 17<br>O número $num12 é maior que o número $num13.";
}   else {
    echo"<br>Exercício 17<br>O número $num13 é maior que o número $num12.";
}echo"<br>";

//Exercício 18
$nome = "Maria";

echo "<br> Exercício 18<br> Bem-vindo $nome.";
echo "<br>";

//Exercício 19
echo"<br>Exercício 19<br>";
for($i=0; $i<=10; $i++){
    echo"$i x 2 = ". $i*2;
    echo"<br>";
}echo"<br>";

//Exercício 20
echo"<br>Exercício 20<br>";
for($i=0; $i<=10; $i++){
    echo"$i x 5 = ". $i*5;
    echo"<br>";
}echo"<br>";

?>