<?php

namespace app\model\itemVendas;

class ItemVendaModel implements IItemVendasModel {

    private $conexao;

    function __construct() {
        $this->conexao = new \app\data\Conexao();
    }

    public function adicionar(\app\entities\ItemVenda $item) {
        $sql = "INSERT INTO item_venda(quantidade, produto_id, venda_id) VALUES (:quantidade, :produto_id, :venda_id)";

        $stmt = $this->conexao->conectar()->prepare($sql);

        $item = array(
            ':quantidade' => $item->getQuantidade(),
            ':produto_id' => $item->getProduto()->getId(),
            ':venda_id' => $item->getVenda()->getId()
        );

        $stmt->execute($item);
    }

}
