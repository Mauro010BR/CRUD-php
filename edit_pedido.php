<?php
session_start();
include "config.php";

if (!isset($_SESSION['email']) == true and (!isset($_SESSION['senha'])) == true) {
    unset($_SESSION['nome']);
    unset($_SESSION['email']);
    header('location: index.php');
}
$id = $_GET['id'];

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .back {
            max-width: 1500px;
            width: 100%;
            height: 720px;
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(45deg, cyan, yellow);

        }

        h2 {
            text-align: center;
        }

        h1 {
            text-align: center;
        }

        .form {
            background-color: rgba(0, 0, 0, 0.9);
            position: absolute;
            top: 56%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 32px;
            border-radius: 15px;
            color: #fff;
        }

        .botao {
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
        }

        .botao:hover {
            background-color: deepskyblue;
            cursor: pointer;
        }

        select {
            border-radius: 15px 15px 15px 15px;
        }
    </style>
    <title>Pedido</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="acesso_cliente.php">
                <img src="img/logo.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                BMO Inform??tica
            </a>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="acesso_cliente.php">In??cio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="pedidos.php">Pedidos</a>
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
        <div class="form">
            <h2>Edite seu Pedido: </h2>
            <hr>
            <form action="save_prod.php" method="POST">
                <label for="processador">Processador: </label>
                <select name="processador" id="processador">
                    <option disabled option value="">Selecione o Processador</option>
                    <option value="nenhum">Nenhum</option>
                    <option value="i9">I9</option>
                    <option value="i7">I7</option>
                    <option value="ryzen7">AMD Ryzen 7</option>
                    <option value="ryzen5">AMD Ryzen 5</option>
                </select>
                <br>
                <hr>
                <label for="pvideo">Placa de V??deo: </label>
                <select name="pvideo" id="pvideo">
                    <option disabled option value="">Selecione a Placa de V??deo</option>
                    <option value="nenhum">Nenhum</option>
                    <option value="rtx3090">RTX 3090</option>
                    <option value="rtx2060 ">RTX 2060 </option>
                    <option value="gtx1650">gtx 1650</option>
                    <option value="gtx1050">gtx 1050 ti</option>
                </select>
                <br>
                <hr>
                <label for="pmae">Placa M??e: </label>
                <select name="pmae" id="pmae">
                    <option disabled option value="">Selecione a Placa M??e</option>
                    <option value="nenhum">Nenhum</option>
                    <option value="AsRock B450M Steel Legend">AsRock B450M Steel Legend</option>
                    <option value="Gigabyte B450 AORUS M">Gigabyte B450 AORUS M</option>
                </select>
                <br>
                <hr>
                <label for="ram">Mem??ria RAM: </label>
                <select name="ram" id="ram">
                    <option disabled option value="">Selecione a Mem??ria RAM: </option>
                    <option value="nenhum">Nenhum</option>
                    <option value="ram8">Mem??ria RAM DDR4 HyperX Fury 8 GB</option>
                    <option value="ram4">Mem??ria RAM DDR4 HyperX Fury 4 GB</option>
                </select>
                <br>
                <hr>
                <label for="cooler">Cooler: </label>
                <select name="cooler" id="cooler">
                    <option disabled option value="">Selecione o Cooler</option>
                    <option value="nenhum">Nenhum</option>
                    <option value="Cooler Hydro Series H60 Corsair">Cooler Hydro Series H60 Corsair</option>
                </select>
                <br>
                <hr>
                <label for="hd">HD: </label>
                <select name="hd" id="hd">
                    <option disabled option value="">Selecione o HD</option>
                    <option value="nenhum">Nenhum</option>
                    <option value="Seagate Barracuda ST1000DM010">Seagate Barracuda ST1000DM010</option>
                </select>
                <br>
                <hr>
                <label for="ssd">SSD: </label>
                <select name="ssd" id="ssd">
                    <option disabled option value="">Selecione o SSD</option>
                    <option value="nenhum">Nenhum</option>
                    <option value="SSD Samsung 970 EVO 500GB">SSD Samsung 970 EVO 500GB</option>
                </select>
                <br>
                <hr>
                <label for="gabinete">Gabinete: </label>
                <select name="gabinete" id="gabinete">
                    <option disabled option value="">Selecione o Gabinete</option>
                    <option value="nenhum">Nenhum</option>
                    <option value="Thermaltake">Thermaltake</option>
                    <option value="Cooler Master">Cooler Master</option>
                </select>
                <input type="hidden" name="ID" value="<?php echo $id ?>">
                <br>
                <hr>
                <input class="botao" type="submit" name="submit" id="submit" value="Atualizar Pedido">

            </form>
        </div>
    </div>
    <?php
    include "footer.php";
    ?>

</body>

</html>