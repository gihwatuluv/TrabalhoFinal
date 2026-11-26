<?php
if (isset($_GET['erro']) && $_GET['erro'] == 'login') {
    echo "<p style='color:red;'>E-mail ou senha incorretos!</p>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="verifica_cliente.php" method="post">
        E-mail: <br>
        <input type="text" name="email"> <br>
        Senha: <br>
        <input type="text" name="senha"> <br>

        <input type="submit" value="Logar">
    </form>

    <a href="cadcliente.php">Nao tenho cadastro.</a>
</body>
</html>