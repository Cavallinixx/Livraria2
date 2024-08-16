<?php 
namespace Projeto\Livraria2\PHP\Modelo;

require_once('DAO/Conexao.php');
require_once('DAO/Consultar.php'); 
require_once('DAO/Excluir.php'); 
require_once('DAO/Atualizar.php');

use Projeto\Livraria2\PHP\Modelo\DAO\Conexao;
use Projeto\Livraria2\PHP\Modelo\DAO\Consultar;
use Projeto\Livraria2\PHP\Modelo\DAO\Excluir;
use Projeto\Livraria2\PHP\Modelo\DAO\Atualizar;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel ADM</title>
    <link rel="stylesheet" href="../Modelo/estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</head>
<body class="fundo">
    <nav class="navbar navbar-expand-lg" style="background-color:rgba(255, 255, 255, 0.87);">
        <div class="container-fluid">
            <a class="navbar-brand" style="color: rgb(0, 0, 0);" href="#">AlviVerde</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" style="color: rgb(0, 0, 0);" href="../Modelo/Login.php">Página Inicial</a>
                    </li>
                    <li class="nav-item">
                        <a href="../Modelo/Produtos.php" class="nav-link" style="color: rgb(0, 0, 0);">Produtos</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Enviar</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="bahh mt-5 p-3 mb-2 bg-black text-white">
        <h2 class="text-center">Painel ADM</h2>
        <form method="GET">
            <div class="mb-3 text-center">
                <p class="title">CRUD</p>
                <p class="submit">Escolha a opção desejada:</p>
                <br><br><br>
                <div class="btn mb-2">
                    <a class="btn btn-secondary" href="?acao=consultarTudo">Consultar Tudo</a>
                </div>
                <div class="btn mb-2">
                    <a class="btn btn-secondary" href="?acao=consultarIndividual">Consultar Individual</a>
                </div>
                <div class="btn mb-2">
                    <a class="btn btn-secondary" href="?acao=atualizarCliente">Atualizar</a>
                </div>
                <div class="btn mb-2">
                    <a class="btn btn-danger" href="?acao=excluirCliente">Excluir</a>
                </div>
                <p class="signin">Login <a href="../Modelo/Login.php">Entrar</a></p>
            </div>
            <br><br><br>
        </form>

        <?php
        
        $conexao = new Conexao();
        $consultar = new Consultar();
        $excluir = new Excluir();
        $atualizar = new Atualizar();

        
        if (isset($_GET['acao'])) {
            switch ($_GET['acao']) {
                case 'consultarTudo':
                    echo "<h3>Consultar Tudo</h3>";
                    $consultar->consultarTudo($conexao, 'cadastrar'); 
                    break;
                    
                case 'consultarIndividual':
                    echo '<h3>Consultar Individual</h3>';
                    echo '<form method="GET">
                            <div class="mb-3">
                                <label for="campo" class="form-label">Campo:</label>
                                <input type="text" id="campo" name="campo" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="codigo" class="form-label">Código:</label>
                                <input type="text" id="codigo" name="codigo" class="form-control" required>
                            </div>
                            <input type="hidden" name="acao" value="consultarIndividual">
                            <button type="submit" class="btn btn-primary">Consultar</button>
                        </form>';

                    if (isset($_GET['campo']) && isset($_GET['codigo'])) {
                        $campo = $_GET['campo'];
                        $codigo = $_GET['codigo'];
                        echo '<div class="mt-3">';
                        $consultar->consultarIndividual($conexao, 'cadastrar', $campo, $codigo);
                        echo '</div>';
                    }
                    break;

                case 'excluirCliente':
                    echo '<h3>Excluir Cliente</h3>';
                    echo '<form method="GET">
                            <div class="mb-3">
                                <label for="nome" class="form-label">Nome do Cliente:</label>
                                <input type="text" id="nome" name="nome" class="form-control" required>
                            </div>
                            <input type="hidden" name="acao" value="excluirCliente">
                            <button type="submit" class="btn btn-danger">Excluir</button>
                        </form>';

                    if (isset($_GET['nome'])) {
                        $nome = $_GET['nome'];
                        $excluir->excluirCliente($conexao, $nome);
                    }
                    break;

                    case 'atualizarCliente':
                        echo '<h3>Atualizar Cliente</h3>';
                        echo '<form method="GET">
                                <div class="mb-3">
                                    <label for="campo" class="form-label">Campo a ser Atualizado:</label>
                                    <input type="text" id="campo" name="campo" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label for="novoDado" class="form-label">Novo Dado:</label>
                                    <input type="text" id="novoDado" name="novoDado" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label for="nome" class="form-label">Nome do Cliente:</label>
                                    <input type="text" id="nome" name="nome" class="form-control" required>
                                </div>
                                <input type="hidden" name="acao" value="atualizarCliente">
                                <button type="submit" class="btn btn-secondary">Atualizar</button>
                            </form>';
    
                        if (isset($_GET['campo']) && isset($_GET['novoDado']) && isset($_GET['nome'])) {
                            $campo = $_GET['campo'];
                            $novoDado = $_GET['novoDado'];
                            $nome = $_GET['nome'];
                            $atualizar->atualizarUsuario($conexao, $campo, $novoDado, $nome);
                        }
                        break;
            }
        }
        ?>
    </div>
</body>
</html
