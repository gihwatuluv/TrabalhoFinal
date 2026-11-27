<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Lista de veículos</title>

    <style>
        div {
            border-style: solid;
        }

        .veiculos {
            border-color: blue;
            padding: 10px;
        }

        .veiculo {
            border-color: red;
            padding: 10px;
            margin: 10px;
        }
    </style>
</head>

<body>
    <h2>Lista de veículos</h2>

    <div class="veiculos">
        <?php
        require_once "../conexao.php";

        $sql = "SELECT idveiculo, placa, modelo, cor, ano
                FROM veiculo;";

        $comando = mysqli_prepare($conexao, $sql);
        mysqli_stmt_execute($comando);
        $veiculos = mysqli_stmt_get_result($comando);

        while ($veiculo = mysqli_fetch_array($veiculos)) {
            $idveiculo = $veiculo['idveiculo'];
            $placa = $veiculo['placa'];
            $modelo = $veiculo['modelo'];
            $cor = $veiculo['cor'];
            $ano = $veiculo['ano'];

            echo "<div class='veiculo'>";

            echo $idveiculo;
            echo "<br>";

            echo "Placa: " . $placa;
            echo "<br>";

            echo "Modelo: " . $modelo;
            echo "<br>";

            echo "Cor: " . $cor;
            echo "<br>";

            echo "Ano: " . $ano;

            echo "</div>";
        }
        ?>
    </div>

</body>

</html>

