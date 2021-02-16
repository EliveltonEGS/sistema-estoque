<?php

namespace app\entities;

class Venda extends EntityBase {

    private double $total;
    private $data;

    function getTotal(): double {
        return $this->total;
    }

    function getData() {
        return $this->data;
    }

    function setTotal(double $total): void {
        $this->total = $total;
    }

    function setData($data): void {
        $this->data = $data;
    }

}
