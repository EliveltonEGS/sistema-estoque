<?php

namespace app\model\categorias;

class CategoriaModel implements ICategoriaModel {

    private $conexao;

    public function __construct() {
        $this->conexao = new \app\data\Conexao();
    }

    public function adicionar(\app\entities\Categoria $categoria) {
        $sql = "insert into categorias(id_usuario, nome_categoria, dataCaptura) "
                . "values (:id_usuario, :descricao, :data)";

        $stmt = $this->conexao->conectar()->prepare($sql);

        $categoria = array(
            ':id_usuario' => $categoria->getUsuario()->getId(),
            ':descricao' => $categoria->getDescricao(),
            ':data' => $categoria->getData());

        $stmt->execute($categoria);
    }

    public function atualizar(\app\entities\Categoria $categoria) {
        $sql = "update categorias set nome_categoria = :descricao where id_categoria = :id)";

        $stmt = $this->conexao->conectar()->prepare($sql);

        $categoria = array(
            ':descricao' => $categoria->getDescricao(),
            ':id' => $categoria->getId());

        $stmt->execute($categoria);
    }

    public function buscarPorId(int $id) {
        $sql = "select * from categorias where id_categoria = :id)";

        $stmt = $this->conexao->conectar()->prepare($sql);

        $categoria = array(':id' => $categoria->getId());

        $stmt->execute($categoria);
        return $stmt->fetch();
    }

}
