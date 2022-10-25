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
        <img src="img/logo.png" height="100" alt="Logo">
        <h1>BMO Informática</h1>
        <hr>
        <h2>Cadastre-se</h2>
        <form action="valida_cadastro.php" method="POST">
            <label for="nome">Nome: </label>
            <input type="text" name="nome" id="nome" placeholder="Digite o seu nome" required>
            <br><br>
            <label for="email">Email: </label>
            <input type="email" name="email" id="email" placeholder="Digite um Email" required>
            <br><br>
            <label for="senha">Senha: </label>
            <input type="password" name="senha" id="senha" placeholder="Digite uma Senha" required>
            <br><br>
            <input class="botao" type="submit" name="submit" id="submit" value="Enviar">
        </form>
        <br>
        <a href="index.php">Já possui conta ?</a>
        <?php
        session_start();

        if (isset($_SESSION['mensagem'])) {
            $mensagem = $_SESSION['mensagem'];

            echo '<p>' . $mensagem;
            unset($_SESSION['mensagem']);
        }
        ?>
    </div>
</body>

</html>