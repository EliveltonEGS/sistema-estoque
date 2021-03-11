<?php

namespace app\entities;

class ItemVenda extends EntityBase {

    private $quantidade;
    private Produto $produto;
    private Venda $venda;

    function getQuantidade() {
        return $this->quantidade;
    }

    function getProduto(): Produto {
        return $this->produto;
    }

    function getVenda(): Venda {
        return $this->venda;
    }

    function setQuantidade($quantidade) {
        $this->quantidade = $quantidade;
    }

    function setProduto(Produto $produto): void {
        $this->produto = $produto;
    }

    function setVenda(Venda $venda): void {
        $this->venda = $venda;
    }

}
