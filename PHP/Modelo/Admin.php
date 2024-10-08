<?php namespace Projeto\Livraria2\PHP\Modelo; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login do Administrador</title>
    <link rel="stylesheet" href="../Modelo/estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</head>
<body class="admin">
    <nav class="navbar navbar-expand-lg" style="background-color:rgba(255, 255, 255, 0.87);">
        <div class="container-fluid">
            <a class="navbar-brand" style="color: rgb(0, 0, 0);" href="#">AlviVerde</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" style="color: rgb(0, 0, 0);" href="#">Pagina Inicial</a>
                    </li>
                    <li class="nav-item">
                        <a href="../Modelo/Produtos.php" class="nav-link" style="color: rgb(0, 0, 0)">Produtos</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Enviar</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="login">
        <h1>Administrador</h1>
        <form method="POST" action="">
            <input type="text" name="nome" placeholder="Nome" required>
            <br><br>
            <input type="password" name="senha" placeholder="Senha" required>
            <br><br>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nome = $_POST['nome'];
            $senha = $_POST['senha'];

            if (realizarLogin($nome, $senha)) {
                // Redireciona para a página Crud.php
                header("Location: ../Modelo/Crud.php");
                exit; // Importante para parar a execução do script
            } else {
                echo "<p>Login Inválido</p>";
            }
        }

        function realizarLogin($nome, $senha) {
            // Credenciais fixas
            $credenciais = [
                'vitor' => '123' // Nome e senha fixos
            ];

            // Verificando se o nome e a senha correspondem
            if (isset($credenciais[$nome]) && $credenciais[$nome] === $senha) {
                return true;
            }
            return false;
        }
        ?>
    </div>
</body>
</html>


