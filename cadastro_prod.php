<?php
session_start();
include "config.php";

$processador = $_POST['processador'];
$pvideo = $_POST['pvideo'];
$pmae = $_POST['pmae'];
$ram = $_POST['ram'];
$cooler = $_POST['cooler'];
$hd = $_POST['hd'];
$ssd = $_POST['ssd'];
$gabinete = $_POST['gabinete'];

$sql = "INSERT INTO pedido (processador,video,mae,ram,cooler,hd,ssd,gabinete) VALUES('$processador','$pvideo','$pmae','$ram','$cooler','$hd','$ssd','$gabinete')";


if (mysqli_query($conexao, $sql)) {
    $_SESSION['mensagem'] = "Pedido Enviado !";
    header("Location: acesso_cliente.php");
} else {
    echo "falha do cadastro";
}
