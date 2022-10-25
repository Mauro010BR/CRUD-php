<?php

include "config.php";

$id = $_GET['id'];

$sqlSelect = "SELECT * FROM dados WHERE ID='$id'";

$result = $conexao->query($sqlSelect);

if (mysqli_num_rows($result) > 0) {
    while ($user_data = mysqli_fetch_assoc($result)) {
        $nome = $user_data['nome'];
        $email = $user_data['email'];
        $senha = $user_data['senha'];
        $user_data['perfil'];
    }
} else {
    header('Location: acesso_adm.php');
}


?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(45deg, cyan, yellow);
        }

        div {
            background-color: rgba(0, 0, 0, 0.9);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 80px;
            border-radius: 15px;
            color: #fff;
        }

        input {
            padding: 15px;
            border: none;
            outline: none;
            border-radius: 15px;
            font-size: 15px;
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

        a {
            color: #fff;
            text-decoration: none
        }

        img {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        select {
            border-radius: 15px 15px 15px 15px;
        }
    </style>
</head>

<body>
    <div>
        <img src="img/logo.png" height="100" alt="">
        <h1>BMO Informática</h1>
        <hr>
        <h2>Altere o Cadastro</h2>
        <form action="save_edit.php" method="POST">
            <label for="nome">Nome: </label>
            <input type="text" name="nome" id="nome" placeholder="Digite o seu nome" value="<?php echo $nome ?>" required>
            <br><br>
            <label for="email">Email: </label>
            <input type="email" name="email" id="email" placeholder="Digite um Email" value="<?php echo $email ?>" required>
            <br><br>
            <label for="senha">Senha: </label>
            <input type="password" name="senha" id="senha" placeholder="Digite uma Senha" value="<?php echo $senha ?>" required>
            <br><br>
            <label for="perfil">Perfil: </label>
            <select name="perfil" id="perfil">
                <option value="cliente">Cliente </option>
                <option value="adm">Adm</option>
            </select>
            <br><br>
            <input type="hidden" name="ID" value="<?php echo $id ?>">
            <input class="botao" type="submit" name="update" id="update" value="Enviar">
        </form>
        <br>
        <a href="acesso_adm.php">Voltar</a>
    </div>
</body>

</html>