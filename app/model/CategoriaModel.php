<?php

namespace app\model;

use app\data\Conexao;
use app\entities\Categoria;

class CategoriaModel{
    public function savar(Categoria $categoria){
        $conn = new Conexao();

        $sql = "INSERT INTO categoria (descricao) VALUES (:descricao)";
        $stmt = $conn->conectar()->prepare($sql);
        $stmt->bindValue(':descricao', $categoria->getDescricao());
        $stmt->execute();
    }

    public function buscaCategoria(Categoria $categoria){
        $conn = new Conexao();

        $sql = "SELECT * FROM categoria WHERE descricao = :descricao";
        $stmt = $conn->conectar()->prepare($sql);
        $stmt->bindValue(':descricao', $categoria->getDescricao());
        $stmt->execute();
        $result = $stmt->fetch();


        if($result > 0){
            return $result;
        }else{
            return false;
        }
    }
}