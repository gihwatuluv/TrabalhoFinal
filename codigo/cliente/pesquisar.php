<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <h2>Pesquisar clientes</h2>

    <form action="pesquisar.php" method="post">

        Nome: <br>
        <input type="text" name="nome"> <br><br>

        <input type="submit" value="Pesquisar">

    </form>

    <div>
        <?php
        if (isset($_POST['nome'])) {

            require_once "../conexao.php";

            $nome = $_POST['nome'];

            $sql = "SELECT idcliente, nome, email, foto
                    FROM cliente
                    WHERE nome LIKE ?;";

            $comando = mysqli_prepare($conexao, $sql);

            $nome = "%" . $nome . "%";

            mysqli_stmt_bind_param($comando, "s", $nome);

            mysqli_stmt_execute($comando);

            $clientes = mysqli_stmt_get_result($comando);

            $quantidade_cliente = mysqli_num_rows($clientes);

            if ($quantidade_cliente == 0) {
                echo "Nenhum cliente encontrado...";
            } else {
                while ($cliente = mysqli_fetch_array($clientes)) {

                    $idcliente = $cliente['idcliente'];
                    $nome = $cliente['nome'];
                    $email = $cliente['email'];
                    $foto = $cliente['foto'];

                    echo "<div>";

                    echo "<img src='../fotos_cliente/$foto'>";
                    echo "<br>";
                    echo $idcliente;
                    echo "<br>";
                    echo $nome;
                    echo "<br>";
                    echo $email;

                    echo "</div>";
                }
            }
        }
        ?>
    </div>

</body>

</html>
