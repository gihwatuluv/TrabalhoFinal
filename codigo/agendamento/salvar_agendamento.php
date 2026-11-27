<?php
session_start();

$dia_inicial = $_POST['inicio'];
$dia_final = $_POST['final'];
$periodo = $_POST['periodo'];
$veiculo = $_POST['veiculo'];
$idcliente = $_SESSION['idcliente'];

require_once "../conexao.php";

$valor_veiculo = 100;
$quantidade_veiculos = count($veiculo);
$valor = $valor_veiculo * $quantidade_veiculos * $periodo;

$sql1 = "INSERT INTO agendamento (dia_inicial, dia_final, periodo, valor, idcliente) VALUES (?, ?, ?, ?, ?)";

 $comando = mysqli_prepare($conexao, $sql1);

   mysqli_stmt_bind_param($comando, "ssidi", $dia_inicial, $dia_final, $periodo, $valor, $idcliente);
    mysqli_stmt_execute($comando);

    // pegar id 

    // Pegar o ID do agendamento criado
$idagendamento = mysqli_stmt_insert_id($comando);

// Inserir os veículos selecionados
foreach ($veiculo as $v) {

    $sql = "INSERT INTO agendamento_veiculo (idagendamento, idveiculo)
            VALUES (?, ?)";

    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($comando, "ii",
        $idagendamento,
        $v
    );

    mysqli_stmt_execute($comando);
}

echo "Agendamento realizado com sucesso!";
?>