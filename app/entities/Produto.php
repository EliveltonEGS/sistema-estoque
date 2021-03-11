<?php

namespace app\entities;

class Produto extends EntityBase {

    private $descricao;
    private $quantidade;
    private $preco;
    private Categoria $categoria;

    function getDescricao() {
        return $this->descricao;
    }

    function getQuantidade() {
        return $this->quantidade;
    }

    function getPreco() {
        return $this->preco;
    }

    function getCategoria(): Categoria {
        return $this->categoria;
    }

    function setDescricao(string $descricao) {
        $this->descricao = $descricao;
    }

    function setQuantidade( $quantidade) {
        $this->quantidade = $quantidade;
    }

    function setPreco( $preco) {
        $this->preco = $preco;
    }

    function setCategoria(Categoria $categoria): void {
        $this->categoria = $categoria;
    }

}
