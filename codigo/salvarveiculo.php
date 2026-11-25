<?php
require_once "conexao.php";

$modelo = $_POST['modelo'];
$marca = $_POST['marca'];
$placa = $_POST['placa'];


$sql = "INSERT INTO veiculo (modelo, marca, placa) VALUES (?, ?, ?)";

$comando = mysqli_prepare($conexao, $sql);

mysqli_stmt_bind_param($comando, "sss", $modelo, $marca, $placa);


mysqli_stmt_execute($comando);


header("Location: index.php");
?>