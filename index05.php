<?php
$corEscolhida = "verde";
$corHexa = "";
 
switch($corEscolhida){
    case "vermelho":
        $corHexa = "#ff0000";
        break;
    case "azul":
        $corHexa = "#0000ff";
        break;
    case "verde":
        $corHexa = "#00ff00";
        break;
    default:
        $corHexa = "#000000";
        break;
}
echo "<h1 style='color:$corHexa'>Olá</h1>";
?>