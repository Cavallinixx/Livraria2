<?php
    namespace Projeto\Livraria2\PHP\Modelo\DAO;

    require_once('Conexao.php');
    

    use Projeto\Livraria2\PHP\Modelo\DAO\Conexao;

    class Inserir{
        public Conexao $conexao;
        public string $tabela;
        public string $nome;
        public string $usuario;
        public string $senha;
        public string $telefone;
        public string $cpf;
        public string $numeroCartao;
        public string $nomeCartao;
        public string $validade;
        public string $codigo;
        public string $endereco;
        public string $cidade;
        public string $estado;
        public string $cep;
        public string $pais;
        

     
        function cadastrarCliente(
            Conexao $conexao,
            string $nome,
            string $usuario,
            string $senha,
            string $telefone,
            string $cpf
            
        )
        {
            try{
                $conn = $conexao->conectar();//Abrir a conexão com o banco
                $sql  = "Insert into cadastrar(codigo, nome, usuario, senha, telefone, cpf) values ('','$nome','$usuario','$senha','$telefone','$cpf')";
                $result = mysqli_query($conn, $sql);

                

                if($result){
                    return "<br>Inserido com sucesso!";
                }
                return "<br><br>Não inserido!";

                //Fechar a conexão
                mysqli_close($conn);
            }catch(Except $erro){
                return $erro;
            }
        }//fim do método

        function compra(
            Conexao $conexao,
            string $numeroCartao,
            string $nomeCartao,
            string $validade,
            string $codigo,
            string $endereco,
            string $cidade,
            string $estado,
            string $cep,
            string $pais,
            string $telefone
            
        )
        {
            try{
                $conn = $conexao->conectar();//Abrir a conexão com o banco
                $sql  = "Insert into compraLivro(id, numeroCartao, nomeCartao, validade, codigo, endereco, cidade, estado, cep, pais, telefone,) values ('','$numeroCartao','$numeroCartao','$validade','$codigo','$endereco'','$cidade','$cep','$pais','$telefone')";
                $result = mysqli_query($conn, $sql);

                

                if($result){
                    return "<br>Inserido com sucesso!";
                }
                return "<br><br>Não inserido!";

                //Fechar a conexão
                mysqli_close($conn);
            }catch(Except $erro){
                return $erro;
            }
        }//fim do método

        


    }//fim da classe
?>