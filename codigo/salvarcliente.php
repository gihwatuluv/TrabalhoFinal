<?php
require_once "conexao.php";


$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$nova_senha = password_hash($senha, PASSWORD_DEFAULT);


$nome_arquivo = $_FILES['foto']['name'];
$caminho_temporario = $_FILES['foto']['tmp_name'];

$extensao = pathinfo($nome_arquivo, PATHINFO_EXTENSION);

$novo_nome = uniqid() . "." . $extensao;

$caminho_destino = "fotos_cliente/" . $novo_nome;

move_uploaded_file($caminho_temporario, $caminho_destino);


$sql = "INSERT INTO cliente (nome, email, senha, foto) VALUES (?, ?, ?, ?)";

$comando = mysqli_prepare($conexao, $sql);

mysqli_stmt_bind_param($comando, "ssss", $nome, $email, $nova_senha, $novo_nome);

mysqli_stmt_execute($comando);

header("Location: index.php");
?>