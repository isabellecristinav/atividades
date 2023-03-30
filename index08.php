<?php 
$usuario = 'admin';
$senha = 123;
if ($usuario == 'admin' && $senha == 321) {
    echo "Acesso liberado";
} else {
    echo "Usuário ou senha inválido";
}

echo "<br>";

$produtos = ['👟', '👠', '🎮', '🌭'];
echo $produtos[0];
echo $produtos[3];
echo count($produtos);
echo "<br>";
$i = 0;
while ($i < count ($produtos)){
    echo $produtos[$i];
    $i++; // $i = $i + 1
}
?>


