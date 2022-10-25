<?php
session_start();

include "config.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$perfil = $_POST['perfil'];

$sql = "SELECT * FROM dados WHERE nome = '$nome' and email = '$email' and senha = '$senha' and perfil = '$perfil'";

if (isset($_POST['submit']) && !empty($_POST['nome']) && !empty($_POST['email']) && !empty($_POST['senha']) && !empty($_POST['perfil'])) {
    $result = $conexao->query($sql);

    if (mysqli_num_rows($result) < 1) {
        $_SESSION['mensagem'] = "Dados inválidos, digite novamente !";
        header('Location: index.php');
    } else {
        $_SESSION['nome'] = $nome;
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        $_SESSION['perfil'] = $perfil;

        header('location: acesso.php');
    }
} else {
    $_SESSION['mensagem'] = "Prencha os Campos !";
    header('location: index.php');
}
