<?php

namespace app\entities;

class EntityBase {
    private int $id;
    
    public function setId($value){
        $this->id = $value;
    }
    
    public function getId(){
        return $this->id;
    }
}
