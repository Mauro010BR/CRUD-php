<?php

include_once('config.php');

if (isset($_POST['submit'])) {
    $id = $_POST['ID'];
    $processaor = $_POST['processador'];
    $pvideo = $_POST['pvideo'];
    $pmae = $_POST['pmae'];
    $ram = $_POST['ram'];
    $cooler = $_POST['cooler'];
    $hd = $_POST['hd'];
    $ssd = $_POST['ssd'];
    $gabinete = $_POST['gabinete'];

    $sql = "UPDATE pedido SET processador='$processaor',video='$pvideo',mae='$pmae',ram='$ram',cooler='$cooler',hd='$hd',ssd='$ssd',gabinete='$gabinete' WHERE ID = '$id'";

    $result = $conexao->query($sql);

    header('location: pedidos.php');
}
