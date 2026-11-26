
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

        Email: <br>
        <input type="text" name="email"> <br><br>

        Senha: <br>
        <input type="text" name="senha"> <br><br>

        Foto: <br>
        <input type="file" name="foto"> <br><br>


        <input type="submit" value="Salvar">
        
    </form>
</body>

</html>