<?php
require_once "conexao.php";


$placa = $_POST['placa'];
$modelo = $_POST['modelo'];
$cor = $_POST['cor'];
$ano = $_POST['ano'];

$sql = "INSERT INTO veiculo (placa, modelo, cor, ano) VALUES (?, ?, ?, ?)";

$comando = mysqli_prepare($conexao, $sql);

mysqli_stmt_bind_param($comando, "ssss", $placa, $modelo, $cor, $ano);

mysqli_stmt_execute($comando);

header("Location: index.php");
?>