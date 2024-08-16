<?php
    namespace Projeto\Livraria2\PHP\Modelo\DAO;
    require_once("Conexao.php");
    Use Projeto\Livraria2\PHP\Modelo\DAO;

    class Conexao{

        function conectar(){
            try{
                $conn = mysqli_connect('localhost','root','','livrariati18n');
                if($conn){
                    echo "<br>Conectado com Sucesso!";
                    return $conn;
                }
                echo "<br>Algo deu errado!";
            }catch(Except $erro){
                return $erro;
            }
        }//fim do conectar
    }//fim da classe

    class Login {
        public function verificarUsuario($conexao, $usuario, $senha) {
            // Preparando a consulta SQL para verificar as credenciais
            $sql = "SELECT codigo, senha FROM cadastrar WHERE usuario = ?";
            $stmt = $conexao->prepare($sql);
    
            if ($stmt === false) {
                die("Erro ao preparar a consulta: " . $conexao->error);
            }
    
            $stmt->bind_param("s", $usuario);
            $stmt->execute();
            $stmt->store_result();
    
            // Verificando se o usuário existe
            if ($stmt->num_rows == 1) {
                $stmt->bind_result($codigo, $hashed_password);
                $stmt->fetch();
    
                // Verificando a senha
                if (password_verify($senha, $hashed_password)) {
                    // Iniciando a sessão do usuário
                    session_start();
                    $_SESSION['loggedin'] = true;
                    $_SESSION['user_id'] = $codigo;
                    $_SESSION['username'] = $usuario;
    
                    return true;
                } else {
                    return false;
                }
            } else {
                return false;
            }
    
            // Fechando a conexão
            $stmt->close();
        }
    }
?>