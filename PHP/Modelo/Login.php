<?php 
namespace Projeto\Livraria2\PHP\Modelo;

require_once 'DAO/Conexao.php';

use Projeto\Livraria2\PHP\Modelo\DAO\Conexao;
use Projeto\Livraria2\PHP\Modelo\DAO\Login;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Modelo/estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <title>Login</title>
</head>
<body>
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
  
    <div class="login">
        <h1>Login</h1>
        <!-- Formulário de login -->
        <form method="POST" action="Login.php">
            <input type="text" name="usuario" placeholder="Nome">
            <br><br>
            <input type="password" name="senha" placeholder="Senha">
            <br><br>
            <button type="submit">Enviar
                <?php
                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        $usuario = $_POST['usuario'];
                        $senha = $_POST['senha'];
                    
                        // Conectar ao banco de dados
                        $conexao = new Conexao();
                        $conn = $conexao->conectar();
                        echo "<br><br>";
                    
                        // Preparar e executar a consulta
                        $sql = "SELECT senha FROM cadastrar WHERE usuario = ?";
                        $stmt = $conn->prepare($sql);
                        $stmt->bind_param("s", $usuario);
                        $stmt->execute();
                        $stmt->store_result();
                    
                        if ($stmt->num_rows > 0) {
                            $stmt->bind_result($senhaBanco);
                            $stmt->fetch();
                    
                            // Verificar a senha
                            if ($senha === $senhaBanco) {
                                // Login bem-sucedido
                                $_SESSION['usuario'] = $usuario;
                                header("Location: Produtos.php");
                                exit();
                            } else {
                                echo "<br>Senha ou login incorreto!";
                            }
                        } else {
                            // Usuário não encontrado
                            echo "Usuário não encontrado!";
                        }
                    
                        $stmt->close();
                        $conn->close();
                    }
                    ?>
               
            </button>
        </form>

        
        <br><br>
        <!-- Links corrigidos -->
        <a href="../Modelo/Cadastrar.php" class="btn btn-primary">Cadastrar</a>
        <a href="../Modelo/Admin.php" class="btn btn-primary">Administrador</a>
    </div>
</body>
</html>
