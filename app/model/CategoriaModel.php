<?php

namespace app\model;

class CategoriaModel {

    public function adiconar($dados = array()) {
        $conexao = new \app\data\Conexao();
        $con = $conexao->conexao();

        $sql = "insert into categorias(id_usuario, nome_categoria, dataCaptura) "
                . "values ('{$dados[0]}', '{$dados[1]}', '{$dados[2]}')";
        mysqli_query($con, $sql);
    }

    public function atualizar($dados = array()) {
        $conexao = new \app\data\Conexao();
        $con = $conexao->conexao();

        $sql = "update categorias set nome_categoria = '{$dados[1]}' where id_categoria = '{$dados[0]}'";
        mysqli_query($con, $sql);
    }

    public function excluir($id) {
        $conexao = new \app\data\Conexao();
        $con = $conexao->conexao();

        $sql = "delete from categorias where id_categoria = '{$id}'";
        mysqli_query($con, $sql);
    }

}
