<?php

namespace app\entities;

class ItemVenda extends EntityBase {

    private int $quantidade;
    private Produto $produto;
    private Venda $venda;

    function getQuantidade(): int {
        return $this->quantidade;
    }

    function getProduto(): Produto {
        return $this->produto;
    }

    function getVenda(): Venda {
        return $this->venda;
    }

    function setQuantidade(int $quantidade): void {
        $this->quantidade = $quantidade;
    }

    function setProduto(Produto $produto): void {
        $this->produto = $produto;
    }

    function setVenda(Venda $venda): void {
        $this->venda = $venda;
    }

}
