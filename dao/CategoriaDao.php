<?php
    require_once 'model/CategoriaModel.php';
    require_once 'model/conexao.php';

    class CategoriaDao{

        public static function cadastrar(CategoriaModel $produto){
            $conexao = conexao::conectar();

            $queryInsert = "INSERT INTO tbcategoria(nomeCategoria)
            
                            VALUES(?)";
            
            $prepareStatement = $conexao->prepare($queryInsert);
            
            $prepareStatement->bindValue(1, $produto->getNomeCategoria());

            $prepareStatement->execute();
        }

    }
?>