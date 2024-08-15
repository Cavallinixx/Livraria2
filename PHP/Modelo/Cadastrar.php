<?php namespace Projeto\Livraria2\PHP\Modelo;  
      require_once('DAO/Conexao.php');
      require_once('DAO/Inserir.php');
      Use Projeto\Livraria2\PHP\Modelo\DAO\Conexao;
      Use Projeto\Livraria2\PHP\Modelo\DAO\Inserir;
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="../Modelo/estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    
</head>
<body class="">
<nav class="navbar navbar-expand-lg" style="background-color:rgba(255, 255, 255, 0.87);">
        <div class="container-fluid">
            <a class="navbar-brand" style="color: rgb(0, 0, 0);" href="#">AlviVerde</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" style="color: rgb(0, 0, 0);" href="../Modelo/login.php">Pagina Inicial</a>
                    </li>
                    <li class="nav-item">
                        <a href="../Modelo/Produtos.php"class="nav-link" style="color: rgb(0, 0, 0)" >Produtos</a>
                    </li>
                    
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Enviar</button>
                </form>
            </div>
        </div>
    </nav>
    <br><br>
    <div class="container">
        <h2 class="text-center">Cadastro</h2>
        <form method="POST">
        <div class="mb-3">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" id="nome" name="nome" class="form-control" placeholder="Digite seu nome" required>
            </div>

            <div class="mb-3">
                <label for="usuario" class="form-label">Usuário:</label>
                <input type="text" id="usuario" name="usuario" class="form-control" placeholder="Digite seu usuário" required>
            </div>
        
            <div class="mb-3">
                <label for="senha" class="form-label">Senha:</label>
                <input type="password" id="senha" name="senha" class="form-control" placeholder="Digite sua senha" required>
            </div>
        
            <div class="mb-3">
                <label for="telefone" class="form-label">Telefone:</label>
                <input type="tel" id="telefone" name="telefone" class="form-control" placeholder="Digite seu telefone" required>
            </div>
        
        
            <div class="mb-3">
                <label for="cpf" class="form-label">CPF:</label>
                <input type="number" id="cpf" name="cpf" class="form-control" placeholder="Digite seu CPF" required>
            </div>
        
            <button type="submit" class="btn btn-primary">Cadastrar
            <?php
                $nome = $_POST['nome'];
                $usuario = $_POST['usuario'];
                $senha   = $_POST['senha'];
                $telefone = $_POST['telefone'];
                $cpf = $_POST['cpf'];

                $conexao = new Conexao();          
                $cadastrar = new Inserir();
                echo $cadastrar->cadastrarCliente($conexao, $nome, $usuario, $senha, $telefone, $cpf);

            ?>
            </button>
        </form>
    </div>

    
</body>
</html>
