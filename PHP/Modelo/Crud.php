<?php namespace Projeto\Livraria2\PHP\Modelo;  

    require_once('DAO/Conexao.php');
   
    
    use PHP\Modelo\DAO\Conexao;
    

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
    <title>Painel ADM</title>
</head>
<body>
    <div class="p-3 mb-2 bg-black text-white">
        <h2>Seja Bem-Vindo, ADM!!</h2>
        <br><br>
        <form class="form"  method="POST">
            <p class="title">CRUD </p>
            <p class="submit">Escolha a opção desejada: </p>
            <div class="btn">
                <a class="btn btn-secondary">Consultar
                    <?php

                   function consultarTudo(Conexao $conexao, string $nomeTabela) {
                    try {
                        $conn = $conexao->conectar();
                        $sql = "SELECT * FROM $nomeTabela";
                        $result = mysqli_query($conn, $sql);
            
                        while ($dados = mysqli_fetch_Array($result)) {
                            echo "<br>Nome: " . $dados["nome"] .
                                 "<br>Usuário: " . $dados["usuario"] .
                                 "<br>Telefone: " . $dados["telefone"].
                                 "<br>CPF: " . $dados["cpf"];
                        }
                    } catch (Exception $erro) {
                        echo $erro;
                    }
                }
            
                    ?>
                </a>
            </div>
            <div class="btn">
                <a class="btn btn-secondary">Consultar Individual
                <?php
                    echo $consultar->consultarIndividual($conexao,$nomeTabela,$nomeCampo,$codigo);

                    try {
                        $conn = $conexao->conectar();
                        $sql = "SELECT * FROM $nomeTabela WHERE $nomeCampo = '$codigo'";
                        $result = mysqli_query($conn, $sql);
            
                        while ($dados = mysqli_fetch_Array($result)) {
                            if ($dados["cpf"] == $codigo) {
                                echo "\nNome: " . $dados["nome"] .
                                     "\nUsuário: " . $dados["usuario"].
                                     "\nSenha: " . $dados["senha"] .
                                     "\nTelefone: " . $dados["telefone"].
                                     "\nCPF: " . $dados["cpf"];
                                return; // Encerrando o processo
                            }
                        }
                        echo "CPF digitado não é válido!";
                    }

                        $conexao = new Conexao(); 
                    $consultar = new Consultar();

               ?>
                </a>
            </div>
            <div class="btn">
                <a href="atualizar.php" class="btn btn-secondary">Atualizar</a>
            </div>
            <div class="btn">
                <a href="excluir.php" class="btn btn-danger">Excluir</a>
            </div>
            <p class="signin">Não é Adm? <a href="../Modelo/Login.php">Entrar</a></p>
        </form>
        <br><br><br><br>
    </div>
</body>
</html>
