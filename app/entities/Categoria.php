<?php

namespace app\entities;

class Categoria extends EntityBase {

    private string $descricao;
    private Usuario $usuario;
    private $data;
    
    public function setDescricao($value) {
        $this->descricao = $value;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function setUsuario(Usuario $usuario) {
        $this->usuario = $usuario;
    }

    public function getUsuario() {
        return $this->usuario;
    }

    public function setData($value) {
        $this->data = $value;
    }

    public function getData() {
        return $this->data;
    }

}
