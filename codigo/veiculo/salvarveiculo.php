<?php
require_once "../conexao.php";


$placa = $_POST['placa'];
$modelo = $_POST['modelo'];
$cor = $_POST['cor'];
$ano = $_POST['ano'];

$sql = "INSERT INTO veiculo (placa, modelo, cor, ano) VALUES (?, ?, ?, ?)";

$comando = mysqli_prepare($conexao, $sql);

mysqli_stmt_bind_param($comando, "ssss", $placa, $modelo, $cor, $ano);

mysqli_stmt_execute($comando);
// echo " realizado com sucesso!";


header("Location: ../funcionario/principal_funcionario.php");

// echo " realizado com sucesso!";

// <a href="../funcionario/principal_funcionario.php">Cadastre outro</a>

// <a href="../funcionario/principal_funcionario.php"> Cadastre outro veiculo</a>
?>
