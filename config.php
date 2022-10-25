<?php

define('HOSTNAME', 'localhost');
define('HOSTUSER', 'root');
define('HOSTPASSWORD', '');
define('DATABASENOME', 'dados1');

$conexao = mysqli_connect(HOSTNAME, HOSTUSER, HOSTPASSWORD, DATABASENOME);
