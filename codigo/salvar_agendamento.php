<?php
require_once "conexao.php";

$dia_inicial = $_POST['inicial'];
$dia_final = $_POST['final'];
$periodo = $_POST['periodo'];
$idcliente = $_POST['$idcliente'];

$valor = 300 * $periodo;

$sql1 = "INSERT INTO agendamento (dia_inicial, dia_final, valor, idcliente) VALUES (?, ?, ?, ?)";

 $comando = mysqli_prepare($conexao, $sql1);

   mysqli_stmt_bind_param($comando, "ssdi", $dia_inicial, $dia_final, $valor, $idcliente);
    mysqli_stmt_execute($comando);

    // pegar id 

     $veiculos = $_POST['opcao'];
        for ($i = 0; $i < count($veiculos); $i++) {
        $idveiculo = $veiculos[$i];

    $sql2 = "INSERT INTO veiculo_agendamento
    (idveiculo, idagendamento)
    VALUES (?, ?)";

    $comando = mysqli_prepare($conexao, $sql2);

    mysqli_stmt_bind_param($comando, "ii", $idveiculo, $idagendamento
    );

    mysqli_stmt_execute($comando);
}
   




header("Location: cadagendamento.php");
?>