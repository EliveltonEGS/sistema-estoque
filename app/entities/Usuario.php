<?php

namespace app\entities;

class Usuario extends EntityBase {

    private string $nome;
    private string $user;
    private string $email;
    private string $senha;
    private \DateTime $data;

    private function getNome() {
        return $this->nome;
    }

    private function setNome($value) {
        $this->nome = $value;
    }

    private function getUser() {
        return $this->user;
    }

    private function setUser($value) {
        $this->user = $value;
    }

    private function getEmail() {
        return $this->email;
    }

    private function setEmail($value) {
        $this->email = $value;
    }

    private function getSenha() {
        return $this->senha;
    }

    private function setSenha($value) {
        $this->senha = $value;
    }

    private function getData() {
        return $this->data;
    }

    private function setData($value) {
        $this->data = $value;
    }

}
