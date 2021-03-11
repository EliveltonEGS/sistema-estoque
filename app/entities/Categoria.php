<?php

namespace app\entities;

class Categoria extends EntityBase {

    private $descricao;

    function getDescricao() {
        return $this->descricao;
    }

    function setDescricao(string $descricao) {
        $this->descricao = $descricao;
    }

}
