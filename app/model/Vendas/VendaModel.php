<?php

namespace app\model\vendas;

use app\entities\Venda;
use app\data\Conexao;

class VendaModel {

    private $conexao;

    public function __construct() {
        $this->conexao = new Conexao();
    }

    public function adicionar(Venda $venda) {
        $sql = "INSERT INTO venda (valor_total, data) VALUES (:valor_total, :data)";
        
        $stmt = $this->conexao->conectar()->prepare($sql);
        
        $venda = array(
            ':valor_total' => $venda->getTotal(),
            ':data' => $venda->getData()
        );
        
        $stmt->execute($venda);
    }

}
