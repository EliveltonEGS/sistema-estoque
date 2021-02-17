<?php

namespace app\model\produtos;

use app\data\Conexao;
use app\entities\Produto;

class ProdutoModel {

    private $conexao;

    public function __construct() {
        $this->conexao = new Conexao();
    }

    public function adicionar(Produto $produto) {
        $sql = "INSERT INTO produto (descricao, preco, categoria_id) "
                . "VALUES (:descricao, :preco, :categoria_id)";

        $stmt = $this->conexao->conectar()->prepare($sql);

        $produto = array(
            ':descricao' => $produto->getDescricao(),
            ':preco' => $produto->getPreco(),
            ':categoria_id' => $produto->getCategoria()->getId());
        $stmt->execute($produto);
    }

    public function atualizar(Produto $produto) {
        $sql = "UPDATE produto SET descricao = :descricao, preco = :preco, categoria_id = :categoria_id WHERE produto_id = :produto_id";

        $stmt = $this->conexao->conectar()->prepare($sql);
        $produto = array(
            ':descricao' => $produto->getCategoria(),
            ':preco' => $produto->getPreco(),
            ':categoria_id' => $produto->getCategoria()->getId(),
            ':produto_id' => $produto->getId()
        );
        $stmt->execute($produto);
    }

    public function buscarPorId(int $id) {
        $sql = "SELECT * FROM produto where produto_id = :produto_id";

        $stmt = $this->conexao->conectar()->prepare($sql);
        $produto = array(':produto_id' => $id);
        $stmt->execute($produto);
        return $stmt->fetch();
    }

}
