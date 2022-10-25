<?php
session_start();

if (!isset($_SESSION['email']) == true and (!isset($_SESSION['senha'])) == true) {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('location: index.php');
}

if ($_SESSION['perfil'] == "adm") {
    header('location: acesso_adm.php');
} else {
    header('location: acesso_cliente.php');
}
