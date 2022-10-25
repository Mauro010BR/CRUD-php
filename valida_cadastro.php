<?php
include "config.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$sqlUsuario = "SELECT * FROM dados WHERE email = '$email'";

$verifica = $conexao->query($sqlUsuario);

if (mysqli_num_rows($verifica) > 0) {
    session_start();
    $_SESSION['mensagem'] = "Cadastro já existente !";
    header('location: cadastro.php');
} else {
    $sql = "INSERT INTO dados (nome,email,senha) VALUES ('$nome','$email','$senha')";

    if (mysqli_query($conexao, $sql)) {
        header("Location: index.php");
    } else {
        echo "falha do cadastro";
    }
}
