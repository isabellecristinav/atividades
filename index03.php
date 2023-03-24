<?php
$idade = 10;
if($idade >= 18){
    echo "Pode dirigir";
}else{
    $diferenca = 18 - $idade;
    echo "Menor de idade, volte em $diferenca anos";
}
?>