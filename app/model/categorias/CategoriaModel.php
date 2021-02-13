<?php

namespace app\model\categorias;

class CategoriaModel implements ICategoriaModel {

    private $conexao;

    public function __construct() {
        $this->conexao = new \app\data\Conexao();
    }

    public function adicionar(\app\entities\Categoria $categoria) {
        $sql = "insert into categoria(descricao) "
                . "values (:descricao)";

        $stmt = $this->conexao->conectar()->prepare($sql);

        $categoria = array(':descricao' => $categoria->getDescricao());
        $stmt->execute($categoria);
    }

    public function atualizar(\app\entities\Categoria $categoria) {
        $sql = "update categoria set descricao = :descricao where categoria_ida = :categoria_ida";

        $stmt = $this->conexao->conectar()->prepare($sql);

        $categoria = array(
            ':descricao' => $categoria->getDescricao(),
            ':categoria_ida' => $categoria->getId());

        $stmt->execute($categoria);
    }

    public function buscarPorId(int $id) {
        $sql = "select * from categoria where categoria_ida = :id";

        $stmt = $this->conexao->conectar()->prepare($sql);

        $categoria = array(':categoria_id' => $id);
        $stmt->execute($categoria);
        return $stmt->fetch();
    }

}
