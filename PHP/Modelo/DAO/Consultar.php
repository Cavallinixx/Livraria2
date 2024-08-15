<?php
namespace Projeto\Livraria2\PHP\Modelo;

require_once('DAO/Conexao.php');

use Projeto\Livraria2\PHP\Modelo\DAO\Conexao;

class Consultar {

   
    function consultarIndividual(
        Conexao $conexao,
        string $nomeTabela,
        string $cpf
    ) {
        try {
            $conn = $conexao->conectar();
            $sql = "SELECT * FROM $nomeTabela WHERE cpf = '$cpf'";
            $result = mysqli_query($conn, $sql);

            while ($dados = mysqli_fetch_Array($result)) {
                if ($dados["cpf"] == $cpf) {
                    echo "\nCPF: " . $dados["cpf"] .
                         "\nNome: " . $dados["nome"] .
                         "\nUsuário: " . $dados["usuario"] .
                         "\nTelefone: " . $dados["telefone"];
                    return; // Encerrando o processo
                }
            }
            echo "CPF digitado não é válido!";
        } catch (Exception $erro) {
            echo $erro;
        }
    }

    // Método para consultar todos os registros na tabela
    function consultarTudo(Conexao $conexao, string $nomeTabela) {
        try {
            $conn = $conexao->conectar();
            $sql = "SELECT * FROM $nomeTabela";
            $result = mysqli_query($conn, $sql);

            while ($dados = mysqli_fetch_Array($result)) {
                echo "<br>CPF: " . $dados["cpf"] .
                     "<br>Nome: " . $dados["nome"] .
                     "<br>Usuário: " . $dados["usuario"] .
                     "<br>Telefone: " . $dados["telefone"];
            }
        } catch (Exception $erro) {
            echo $erro;
        }
    }
}
?>
