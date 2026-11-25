<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Cadastro de veículos</title>
</head>

<body>
    <h2>Cadastro de veículos</h2>

    <form action="salvarveiculo.php" method="post">

        Placa: <br>
        <input type="text" name="placa"> <br><br>

        Modelo: <br>
        <input type="text" name="modelo"> <br><br>

        Cor: <br>
        <input type="text" name="cor"> <br><br>

        Ano: <br>
        <input type="number" name="ano"> <br><br>

        Valor: <br>
        <input type="number" name="valor" step="0.01"> <br><br>

        <input type="submit" value="Salvar">

    </form>  
</body>

</html>