/*PROBLEMA: verificar se a idade da pessoa é maior ou igual de 18 anos, se for mostrar a mensagem "pode dirigir" senão não mostrar nada */
$idade = 20;
if($idade >= 18){
echo "Pode dirigir";
}

/*PROBLEMA: verificar se a idade da pessoa é maior ou igual de 18 anos, se for mostrar a mensagem "pode dirigir" senão não mostrar a mensagem "menor de idade" */

$idade = 15;
if($idade >= 18){
echo "Pode dirigir";
}else{
echo "Menor de idade";
}

/*PROBLEMA: verificar se a idade da pessoa é maior ou igual de 18 anos, se for mostrar a mensagem "pode dirigir" senão verificar se a idade é maior ou igual à 90 anos, se for, mostrar a mensagem "já passou do tempo, não pode mais dirigir", senão mostrar "menor de idade" */

/*PROBLEMA: verificar se a idade da pessoa é maior ou igual de 18 anos, se for mostrar a mensagem "pode dirigir" senão mostrar "menor de idade" e a quantidade de anos que falta para a pessoa ser maior de idade */
$idade = 10;
if($idade >= 18){
    echo "Pode dirigir";
}else{
    $diferenca = 18 - $idade;
    echo "Menor de idade, volte em $diferenca anos";
}