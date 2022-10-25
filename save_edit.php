<?php

include_once('config.php');

if (isset($_POST['update'])) {
  $id = $_POST['ID'];
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $senha = $_POST['senha'];
  $perfil = $_POST['perfil'];


  $sql = "UPDATE dados SET nome ='$nome',email ='$email', senha='$senha', perfil='$perfil' WHERE ID = '$id'";

  $result = $conexao->query($sql);

  header('location: acesso_adm.php');
}
