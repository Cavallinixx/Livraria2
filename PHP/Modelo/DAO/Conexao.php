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
        public function verificarUsuario(Conexao $conexao, string $usuario, string $senha) {
            try {
                $conn = $conexao->conectar();
                $sql = "SELECT * FROM cadastrar WHERE usuario = '$usuario' AND senha = '$senha'";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    return true; // Usuário e senha estão corretos
                } else {
                    return false; // Usuário ou senha incorretos
                }
            } catch (Exception $erro) {
                echo $erro;
            }
        }
    }
?>