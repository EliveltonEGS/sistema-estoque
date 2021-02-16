<?php

namespace app\entities;

class Categoria extends EntityBase {

    private string $descricao;

    function getDescricao(): string {
        return $this->descricao;
    }

    function setDescricao(string $descricao): void {
        $this->descricao = $descricao;
    }

}
