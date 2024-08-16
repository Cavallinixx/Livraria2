<?php

namespace Projeto\Livraria2\PHP\Modelo\DAO;

require_once('DAO/Conexao.php');
use Projeto\Livraria2\PHP\Modelo\DAO\Conexao;

class Consultar {

   
    function consultarIndividual(
        Conexao $conexao,
        string $nomeTabela,
        string $nomeCampo,
        string $codigo
    ) {
        try {
            $conn = $conexao->conectar();
            $sql = "SELECT * FROM $nomeTabela WHERE $nomeCampo = '$codigo'";
            $result = mysqli_query($conn, $sql);
    
            if ($result) {
                while ($dados = mysqli_fetch_Array($result)) {
                    echo "\nNome: " . $dados["nome"] .
                         "\nUsuário: " . $dados["usuario"].
                         "\nSenha: " . $dados["senha"] .
                         "\nTelefone: " . $dados["telefone"].
                         "\nCPF: " . $dados["cpf"];
                    return; // Encerrando o processo
                }
                echo "Registro não encontrado!";
            } else {
                echo "Erro na consulta: " . mysqli_error($conn);
            }
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
                echo "<br>Nome: " . $dados["nome"] .
                     "<br>Usuário: " . $dados["usuario"] .
                     "<br>Telefone: " . $dados["telefone"].
                     "<br>CPF: " . $dados["cpf"];
            }
        } catch (Exception $erro) {
            echo $erro;
        }
    }
}
?>
