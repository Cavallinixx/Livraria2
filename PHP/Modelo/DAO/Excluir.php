<?php

namespace Projeto\Livraria2\PHP\Modelo\DAO;

require_once('Conexao.php');

use Projeto\Livraria2\PHP\Modelo\DAO\Conexao;

class Excluir {

    public function excluirCliente(Conexao $conexao, string $nome) {
        try {
            $conn = $conexao->conectar();
            $sql = "DELETE FROM cadastrar WHERE nome = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("s", $nome);
            $result = $stmt->execute();
            $stmt->close();
            mysqli_close($conn);

            if ($result) {
                echo "Excluído com sucesso!";
            } else {
                echo "Não foi possível excluir.";
            }

        } catch (Exception $erro) {
            echo "Erro: " . $erro->getMessage();
        }
    }
}
