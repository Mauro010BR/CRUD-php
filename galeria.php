<?php
session_start();
include "config.php";

if (!isset($_SESSION['email']) == true and (!isset($_SESSION['senha'])) == true) {
    unset($_SESSION['nome']);
    unset($_SESSION['email']);

    header('location: index.php');
}
$nome = $_SESSION['nome'];
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="css/galeria.css" rel="stylesheet">
    <title>Galeria</title>
    <style>
        .back {
            max-width: 1500px;
            width: 100%;
            height: 950px;
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(45deg, cyan, yellow);
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="acesso_cliente.php">
                <img src="img/logo.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                BMO Informática
            </a>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="acesso_cliente.php">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="galeria.php">Galeria</a>
                    </li>
                </ul>
            </div>
            <form class="d-flex">
                <a class="btn btn-danger me-5" href="Sair.php">Sair</a>
            </form>
        </div>
    </nav>
    <div class="back">
        <div class="container-galeria">
            <div class="item-galeria w-2 h-2">
                <img src="img/i9.png" alt="Processador I9" class="img-galeria">
                <span class="title-galeria">
                    Processador I9
                </span>
            </div>
            <div class="item-galeria w-2 h-1">
                <img src="img/i7.jpg" alt="Processador I7" class="img-galeria">
                <span class="title-galeria">
                    Processador I7
                </span>
            </div>
            <div class="item-galeria w-1 h-2">
                <img src="img/amd ryzen 7.jpg" alt="Processador AMD Ryzen 7" class="img-galeria">
                <span class="title-galeria">
                    AMD Ryzen 7
                </span>
            </div>
            <div class="item-galeria w-1 h-1">
                <img src="img/Amd Ryzen 5.jpg" alt="Processador AMD Ryzen 5" class="img-galeria">
                <span class="title-galeria">
                    AMD Ryzen 5
                </span>
            </div>
            <div class="item-galeria w-2 h-2">
                <img src="img/rtx.jpg" alt="RTX 3090" class="img-galeria">
                <span class="title-galeria">
                    RTX 3090
                </span>
            </div>
            <div class="item-galeria w-1 h-2">
                <img src="img/zz.jpg" alt="Geforce" class="img-galeria">
                <span class="title-galeria">
                    Geforce
                </span>
            </div>
            <div class="item-galeria w-1 h-1">
                <img src="img/Gabinete.jpg" alt="Gabinete" class="img-galeria">
                <span class="title-galeria">
                    Gabinete
                </span>
            </div>
            <div class="item-galeria w-1 h-1">
                <img src="img/Placa Mãe.png" alt="Placa Mãe" class="img-galeria">
                <span class="title-galeria">
                    Placa Mãe
                </span>
            </div>
            <div class="item-galeria w-1 h-1">
                <img src="img/Ram.jpg" alt="Memória Ram" class="img-galeria">
                <span class="title-galeria">
                    Memória Ram
                </span>
            </div>
        </div>
    </div>
    <?php
    include "footer.php";
    ?>
</body>

</html>