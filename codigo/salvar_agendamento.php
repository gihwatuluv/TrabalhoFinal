<?php
session_start();

$dia_inicial = $_POST['inicial'];
$dia_final = $_POST['final'];
$periodo = $_POST['periodo'];
$veiculo = $_POST['$opcao'];

require_once "conexao.php";

$valor_diaria = 100;
$quantidade_veiculos = count($veiculos);
$valor = $valor_diaria * $quantidade_veiculos * $periodo;

$sql1 = "INSERT INTO agendamento (dia_inicial, dia_final, periodo, valor) VALUES (?, ?, ?, ?)";

 $comando = mysqli_prepare($conexao, $sql1);

   mysqli_stmt_bind_param($comando, "ssdi", $dia_inicial, $dia_final, $periodo, $valor);
    mysqli_stmt_execute($comando);

    // pegar id 

    // Pegar o ID do agendamento criado
$idagendamento = mysqli_stmt_insert_id($comando);

// Inserir os veículos selecionados
foreach ($veiculos as $v) {

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