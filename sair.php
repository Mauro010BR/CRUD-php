<?php
session_start();
unset($_SESSION['nome']);
unset($_SESSION['email']);
unset($_SESSION['senha']);
unset($_SESSION['perfil']);

header('location: index.php');
