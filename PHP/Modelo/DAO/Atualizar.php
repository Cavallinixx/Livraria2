<?php

namespace Projeto\Livraria2\PHP\Modelo\DAO;  
require_once('Conexao.php');

use Projeto\Livraria2\PHP\Modelo\DAO\Conexao;


    class Atualizar{

        function atualizarUsuario(Conexao $conexao,string $campo,string $novoDado,string $nome){
            try{
                $conn = $conexao->conectar();
                $sql = "update cadastrar set $campo = '$novoDado' where nome = '$nome'";
                $result = mysqli_query($conn, $sql);

                mysqli_close($conn);
                if($result){
                    echo "<br><br>Atualizado com Sucesso!";

                }else{
                    echo "Não foi possivel atualizar!";
                }
            }catch(Exception $ero){
                echo $erro;
            }


        }//fim do function 

    }//fim da classe



?>