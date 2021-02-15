<?php

namespace app\entities;

class Categoria extends EntityBase {

    private string $descricao;

    public function setDescricao($value) {
        $this->descricao = $value;
    }

    public function getDescricao() {
        return $this->descricao;
    }

}
