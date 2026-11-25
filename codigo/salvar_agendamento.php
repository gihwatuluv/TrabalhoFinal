<?php
require_once "conexao.php";

$dia_inicial = $_POST['inicial'];
$dia_final = $_POST['final'];
$periodo = $_POST['periodo'];

$valor = 300 * $periodo

$sql = "INSERT INTO agendamento (dia_inicial, dia_final, valor) VALUES (?, ?, ?)";

 $comando = mysqli_prepare($conexao, $sql);

   mysqli_stmt_bind_param($comando, "ssd", $dia_inicial, $dia_final, $valor);
    mysqli_stmt_execute($comando);

    // pegar id 

     $veiculos = $_POST['opcao'];
        for ($i = 0; $i < count($veiculos); $i++) {
        $idveiculo = $veiculos[$i];

    $sql = "INSERT INTO veiculo_agendamento
    (idveiculo, idagendamento)
    VALUES (?, ?)";

    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($comando, "ii", $idveiculo, $idagendamento
    );

    mysqli_stmt_execute($comando);
}
   




header("Location: cadagendamento.php");
?>