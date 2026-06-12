<?php
for($i=0; $i<=5; $i++){
    echo $i . "<br>";
}

while($i<=3){
    echo $i . "<br>";
    $i++;
}

$nome = "Ana";
$idade = 20;
echo "Meu nome é $nome e tenho $idade anos.";

$numero = 10;
if($numero > 5){
    echo "O número é maior que 5.";
} else {
    echo "O número é menor ou igual a 5.";
}

for ($j=0; $j<=5; $j++){
    echo "PHP" . "<br>";
}

echo "Olá, $nome! Bem-vindo(a) ao PHP.";
?>