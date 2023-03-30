<?php
$nome = $_POST["nome"] ?? "";
$email = $_POST["email"] ?? "";
$telefone = $_POST["telefone"] ?? "";
$rua = $_POST["rua"] ?? "";
$numero = $_POST["numero"] ?? "";
$bairro = $_POST["bairro"] ?? "";
$complemento = $_POST["complemento"] ?? "";
$cidade = $_POST["cidade"] ?? "";
$estado = $_POST["estado"] ?? "";
$data = $_POST["data"] ?? "";
$cpf = $_POST["cpf"] ?? "";
$rg = $_POST["rg"] ?? "";
$zap = $_POST["zap"] ?? "";
$fumante = $_POST["fuma"] ?? "";
$bebida = $_POST["bebida"] ?? "";

echo "Nome: $nome <br>";
echo "E-mail: $email <br>";
echo "Telefone: $telefone <br>";
?>