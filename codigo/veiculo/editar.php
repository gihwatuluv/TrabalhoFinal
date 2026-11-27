<?php
require_once "verificar_sessao.php";
require_once "conexao.php";

$idveiculo = $_GET['idveiculo'];

$sql = "SELECT * FROM veiculo WHERE idveiculo = ?";

$comando = mysqli_prepare($conexao, $sql);

mysqli_stmt_bind_param($comando, "i", $idveiculo);

mysqli_stmt_execute($comando);

$resultado = mysqli_stmt_get_result($comando);

$veiculo = mysqli_fetch_array($resultado);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Editar veículo</title>
</head>

<body>

    <h1>Editar veículo</h1>

    <form action="salvar_edicao_veiculo.php" method="POST">

        <input type="hidden" name="idveiculo"
            value="<?php echo $veiculo['idveiculo']; ?>">

        Placa:
        <br>
        <input type="text" name="placa"
            value="<?php echo $veiculo['placa']; ?>">
        <br><br>

        Modelo:
        <br>
        <input type="text" name="modelo"
            value="<?php echo $veiculo['modelo']; ?>">
        <br><br>

        Cor:
        <br>
        <input type="text" name="cor"
            value="<?php echo $veiculo['cor']; ?>">
        <br><br>

        Ano:
        <br>
        <input type="number" name="ano"
            value="<?php echo $veiculo['ano']; ?>">
        <br><br>

        <input type="submit" value="Salvar alterações">

    </form>

    <a href="../funcionario/principal_funcionaio.php">Início</a>

</body>
</html>  