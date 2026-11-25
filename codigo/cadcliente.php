
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Cadastro de clientes</title>
</head>

<body>
    <h2>Cadastro de clientes</h2>

    <form action="salvarcliente.php" method="post" enctype="multipart/form-data">

        Nome: <br>
        <input type="text" name="nome"> <br><br>

        Telefone: <br>
        <input type="text" name="fone"> <br><br>

        Endereço: <br>
        <input type="text" name="endereco"> <br><br>

        Foto: <br>
        <input type="file" name="foto"> <br><br>

        <input type="submit" value="Salvar">
    </form>
</body>

</html>