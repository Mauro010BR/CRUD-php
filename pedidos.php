<?php
session_start();
include "config.php";

if (!isset($_SESSION['email']) == true and (!isset($_SESSION['senha'])) == true) {
    unset($_SESSION['nome']);
    unset($_SESSION['email']);
    header('location: index.php');
}

$sql = "SELECT * FROM pedido ORDER BY ID ASC";

$result = $conexao->query($sql);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Pedidos</title>
    <style>
        .table-bg {
            background: rgba(0, 0, 0, 0.3);
            border-radius: 15px 15px 15px 15px;
        }

        h1 {
            text-align: center;
        }

        h2 {
            text-align: center;
        }

        .back {
            top: 100%;
            max-width: 1500px;
            width: 100%;
            height: 650px;
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
        <br>
        <div class="m-5">
            <h1>Pedidos: </h1>
            <table class="table table-bg">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Processador</th>
                        <th scope="col">Placa de Video</th>
                        <th scope="col">Placa Mãe</th>
                        <th scope="col">Memória RAM</th>
                        <th scope="col">Cooler</th>
                        <th scope="col">HD</th>
                        <th scope="col">SSD</th>
                        <th scope="col">Gabinete</th>
                        <th scope="col">...</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($user_data = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $user_data['ID'] . "</td>";
                        echo "<td>" . $user_data['processador'] . "</td>";
                        echo "<td>" . $user_data['video'] . "</td>";
                        echo "<td>" . $user_data['mae'] . "</td>";
                        echo "<td>" . $user_data['ram'] . "</td>";
                        echo "<td>" . $user_data['cooler'] . "</td>";
                        echo "<td>" . $user_data['hd'] . "</td>";
                        echo "<td>" . $user_data['ssd'] . "</td>";
                        echo "<td>" . $user_data['gabinete'] . "</td>";
                        echo "<td>
                    <a class='btn btn-sm btn-primary' href='edit_pedido.php?id=$user_data[ID]' title='Editar'>
                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                        <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                    </svg>
                    </a> 
                    <a class='btn btn-sm btn-danger' href='delete_prod.php?id=$user_data[ID]' title='Deletar'>
                        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                            <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
                        </svg>
                    </a>
                    </td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php
    include "footer.php";
    ?>
</body>

</html>