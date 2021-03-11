<?php

namespace app\entities;

class Venda extends EntityBase {

    private $total;
    private $data;

    function getTotal() {
        return $this->total;
    }

    function getData() {
        return $this->data;
    }

    function setTotal($total) {
        $this->total = $total;
    }

    function setData($data) {
        $this->data = $data;
    }

}
