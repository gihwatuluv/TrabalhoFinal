<?php
require_once "conexao.php";


$placa = $_POST['placa'];
$modelo = $_POST['modelo'];
$cor = $_POST['cor'];
$ano = $_POST['ano'];
$valor = $_POST['valor'];

$sql = "INSERT INTO veiculo (placa, modelo, cor, ano, valor) VALUES (?, ?, ?, ?, ?)";

$comando = mysqli_prepare($conexao, $sql);

mysqli_stmt_bind_param($comando, "sssid", $placa, $modelo, $cor, $ano, $valor);

mysqli_stmt_execute($comando);

header("Location: index.php");
?>