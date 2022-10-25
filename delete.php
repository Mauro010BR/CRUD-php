<?php
include "config.php";

if (!empty($_GET['id'])) {

    $id = $_GET['id'];

    $sqlSelect = "SELECT * FROM dados WHERE ID='$id'";

    $result = $conexao->query($sqlSelect);

    if (mysqli_num_rows($result) > 0) {

        $sqlDelete = "DELETE FROM dados WHERE ID = '$id'";
        $delte = $conexao->query($sqlDelete);
    }
}
header('location: acesso_adm.php');
