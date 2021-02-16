<?php

namespace app\model\vendas;

class VendaModel implements IVendasModel {

    private $conexao;

    public function __construct() {
        $this->conexao = new \app\data\Conexao();
    }

    public function adicionar(\app\entities\Venda $venda) {
        $sql = "INSERT INTO venda (valor_total, data) VALUES (:valor_total, :data)";
        
        $stmt = $this->conexao->conectar()->prepare($sql);
        
        $venda = array(
            ':valor_total' => $venda->getTotal(),
            ':data' => $venda->getData()
        );
        
        $stmt->execute($venda);
    }

}
