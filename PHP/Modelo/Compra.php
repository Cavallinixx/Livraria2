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
    <link rel="stylesheet" href="../Modelo/estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <title>Informações de Compra</title>
</head>
<body class="paginaComprar" >
<nav class="navbar navbar-expand-lg" style="background-color:rgba(255, 255, 255, 0.87);">
        <div class="container-fluid">
            <a class="navbar-brand" style="color: rgb(0, 0, 0);" href="#">AlviVerde</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" style="color: rgb(0, 0, 0);" href="../Modelo/Login.php">Pagina Inicial</a>
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

    
    <div class="compra">
        <h2>Informações de Compra</h2>
      
        <form method="POST">
            
            <div class="mb-3">
                <label for="numeroCartao" class="form-label">Número do Cartão</label>
                <input type="text" class="form-control" id="numeroCartao" name="numeroCartao" placeholder="Digite o número do cartão" required>
            </div>

            <div class="mb-3">
                <label for="nomeCartao" class="form-label">Nome no Cartão</label>
                <input type="text" class="form-control" id="nomeCartao" name="nomeCartao" placeholder="Digite o nome como aparece no cartão" required>
            </div>

            <div class="mb-3">
                <label for="validade" class="form-label">Validade</label>
                <input type="text" class="form-control" id="validade" name="validade" placeholder="MM/AA" required>
            </div>

            <div class="mb-3">
                <label for="codigo" class="form-label">Código de Segurança (CVV)</label>
                <input type="text" class="form-control" id="codigo" name="codigo" placeholder="Digite o CVV" required>
            </div>

            <h4>Endereço de Cobrança</h4>
            <div class="mb-3">
                <label for="endereco" class="form-label">Endereço</label>
                <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Digite seu endereço" required>
            </div>
            
            <div class="mb-3">
                <div class="col-md-6 mb-3">
                    <label for="cep" class="form-label">CEP</label>
                    <input type="text" class="form-control" id="cep" name="cep" placeholder="Digite seu CEP" required>
                </div>
            
            </div>
            <button type="submit" class="btn btn-primary">Finalizar Compra
            <?php
                $numeroCartao = $_POST['numeroCartao'];
                $nomeCartao = $_POST['nomeCartao'];
                $validade   = $_POST['validade'];
                $codigo = $_POST['codigo'];
                $endereco = $_POST['endereco'];
                $cep = $_POST['cep'];
                
                

                $conexao = new Conexao();          
                $compra = new Inserir();
                echo $compra->compra($conexao, $numeroCartao, $nomeCartao, $validade, $codigo, $endereco, $cep);
            ?>
            </button>
        </form>
    </div>

    

</body>
</html>
