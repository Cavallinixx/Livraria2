<?php namespace Projeto\Livraria2\PHP\Modelo;  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Modelo/estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    
    <title>Biblioteca de Livros</title>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">AlviVerde</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../Modelo/Login.php">Início</a>
                    </li>
                   
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Pesquisar livros" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Pesquisar</button>
                </form>
            </div>
        </div>
    </nav>
    <br><br><br>
    <!-- Seção de Livros -->
    <div class="container mt-4">
       
        <div class="row">
            <!-- Livro 1 -->
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="../Modelo/Imagens/abelLivro.jpg" class="card-img-top" alt="Capa do Livro 1">
                    <div class="card-body">
                        <h5 class="card-title">Cabeça Fria Coração Quente</h5>
                        <p class="card-text">Autor: Abel Ferreira</p>
                        <p class="card-text">Debruça-se sobre as táticas usadas em campo e fora de campo para alcançar duas taças da Libertadores.</p>
                        <a href="../Modelo/Compra.php" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>

            <!-- Livro 2 -->
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="../Modelo/Imagens/elonmusk.jpg" class="card-img-top" alt="Capa do Livro 2">
                    <div class="card-body">
                        <h5 class="card-title">Elon Musk</h5>
                        <p class="card-text">Autor: Elon Musk</p>
                        <p class="card-text">Uma biografia fascinante de um dos empreendedores mais inovadores do nosso tempo.</p>
                        <a href="../Modelo/Compra.php" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>

            <!-- Livro 3 -->
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="../Modelo/Imagens/lebron.jpg" class="card-img-top" alt="Capa do Livro 3">
                    <div class="card-body">
                        <h5 class="card-title">LeBron</h5>
                        <p class="card-text">Autor: LeBron</p>
                        <p class="card-text">A jornada inspiradora de um dos maiores jogadores de basquete de todos os tempos.</p>
                        <a href="../Modelo/Compra.php" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Rodapé -->
    <footer class="bg-light text-center py-3 mt-4">
        <p>&copy; 2024 AlviVerde. Todos os direitos reservados.</p>
    </footer>

</body>
</html>
