<?php

namespace app\entities;

class Produto extends EntityBase {

    private string $descricao;
    private double $quantidade;
    private double $preco;
    private Categoria $categoria;

    function getDescricao(): string {
        return $this->descricao;
    }

    function getQuantidade(): double {
        return $this->quantidade;
    }

    function getPreco(): double {
        return $this->preco;
    }

    function getCategoria(): Categoria {
        return $this->categoria;
    }

    function setDescricao(string $descricao): void {
        $this->descricao = $descricao;
    }

    function setQuantidade(double $quantidade): void {
        $this->quantidade = $quantidade;
    }

    function setPreco(double $preco): void {
        $this->preco = $preco;
    }

    function setCategoria(Categoria $categoria): void {
        $this->categoria = $categoria;
    }

}
