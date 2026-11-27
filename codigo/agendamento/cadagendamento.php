
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <form action="salvar_agendamento.php" method="POST">
        Dia inicial: <br>
        <input type="date" name="inicio"><br><br>

        Dia final: <br>
        <input type="date" name="final"><br><br>

        Periodo: <br>
        <input type="int" name="periodo"><br><br>

        
        Veiculos: <br>

            <?php
                require_once "../conexao.php";

                    $sql = "SELECT * FROM veiculo";

                    $comando = mysqli_prepare($conexao, $sql);


                    mysqli_stmt_execute($comando);

                    $resultados = mysqli_stmt_get_result($comando);

                    while ($linha = mysqli_fetch_array($resultados)) {
                        $idveiculo = $linha['idveiculo'];
                        $modelo = $linha['modelo'];

                        echo "<input type='checkbox' name='veiculo[]' value='$idveiculo'> $modelo <br>";
                    }
            ?>

            <br>

 <input type="submit" value="agendar">

</body>
</html>