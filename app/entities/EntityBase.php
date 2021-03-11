<?php

namespace app\entities;

class EntityBase {

    private $id;

    function getId() {
        return $this->id;
    }

    function setId(int $id) {
        $this->id = $id;
    }

}
