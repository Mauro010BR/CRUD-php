<?php
include "config.php";

if (!empty($_GET['id'])) {

    $id = $_GET['id'];

    $sql = "SELECT * FROM pedido WHERE ID = '$id'";

    $result = $conexao->query($sql);

    if (mysqli_num_rows($result) > 0) {

        $sqldelete = "DELETE FROM pedido WHERE ID = '$id'";
        $querydelete = $conexao->query($sqldelete);
    }
    header('location: pedidos.php');
}
