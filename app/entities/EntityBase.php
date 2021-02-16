<?php

namespace app\entities;

class EntityBase {

    private int $id;

    function getId(): int {
        return $this->id;
    }

    function setId(int $id): void {
        $this->id = $id;
    }

}
