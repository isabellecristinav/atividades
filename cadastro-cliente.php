<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente</title>
</head>
<body>
<h1>Cadastro de Cliente</h1>
<form method="post" action="salvar-cliente.php">
    Nome:<input name="nome"><br>
    E-mail:<input name="email"><br>
    Telefone:<input name="telefone"><br>
    Rua:<input name="rua"><br>
    Número:<input name="numero"><br>
    Bairro:<input name="bairro"><br>
    Complemento:<input name="complemento"><br>
    Cidade:<input name="cidade"><br>
    Estado:<select name="estado">
        <option value="AC">AC</option>
        <option value="AL">AL</option>
        <option value="AP">AP</option>
        <option value="AM">AM</option>
        <option value="AP">AP</option>
        <option value="AP">AP</option>
        <option value="AP">AP</option>
        <option value="AP">AP</option>
        <option value="AP">AP</option>
        <option value="AP">AP</option>
        <option value="AP">AP</option>
        <option value="AP">AP</option>
        <option value="AP">AP</option>
        <option value="AP">AP</option>
        <option value="AP">AP</option>
        <option value="AP">AP</option>
        <option value="AP">AP</option>
        <option value="AP">AP</option>
        <option value="AP">AP</option>
        <option value="AP">AP</option>
        <option value="AP">AP</option>
        <option value="AP">AP</option>
        <option value="AP">AP</option>
        <option value="AP">AP</option>
        <option value="AP">AP</option>
        <option value="AP">AP</option>
        <option value="AP">AP</option>
    </select><br>
    Data de Nascimento:<input name="data"><br>
    CPF:<input name="cpf"><br>
    RG:<input name="rg"><br>
    WhatsApp:<input name="zap"><br>
    Fumante:<input name="fuma"><br>
    Bebida:<input name="bebida"><br>
    <button type="submit">Salvar Cadastro</button>
</form>
</body>
</html>