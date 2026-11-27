<?php
require_once "verificar_sessao.php";
require_once "conexao.php";

$idveiculo = $_POST['idveiculo'];
$placa = $_POST['placa'];
$modelo = $_POST['modelo'];
$cor = $_POST['cor'];
$ano = $_POST['ano'];

$sql = "UPDATE veiculo
        SET placa = ?, modelo = ?, cor = ?, ano = ?
        WHERE idveiculo = ?";

$comando = mysqli_prepare($conexao, $sql);

mysqli_stmt_bind_param($comando, "sssii",
    $placa, $modelo, $cor, $ano, $idveiculo);

mysqli_stmt_execute($comando);

header("Location: ../funcionario/principal_funcionario.php");
?>