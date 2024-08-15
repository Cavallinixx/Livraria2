<?php
    namespace Projeto\Livraria2\PHP\Modelo;

    require_once('Login.php');
    require_once('Produtos.php');
    require_once('Compra.php');
    require_once('Crud.php');
    require_once('Admin.php');
    require_once('Cadastrar.php');
    require_once('DAO/Conexao.php');
    require_once('DAO/Atualizar.php');
    require_once('DAO/Consultar.php');
    require_once('DAO/Excluir.php');
    require_once('DAO/Inserir.php');

    use PHP\Modelo\DAO\Conexao;
    use PHP\Modelo\DAO\Atualizar;
    use PHP\Modelo\DAO\Consultar;
    use PHP\Modelo\DAO\Excluir;
    use PHP\Modelo\DAO\Inserir;

    $conexao = new Conexao();
    $atualizar = new Atualizar();
    $consultar = new Consultar();
    $excluir = new Excluir();
    $inserir = new Inserir();
    
?>