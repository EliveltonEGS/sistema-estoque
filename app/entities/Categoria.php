<?php

namespace app\entities;

require_once("EntityBase.php");

class Categoria extends EntityBase {

    private $descricao;

    function getDescricao() {
        return $this->descricao;
    }

    function setDescricao(string $descricao) {
        $this->descricao = $descricao;
    }

}
