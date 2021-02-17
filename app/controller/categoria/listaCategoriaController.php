<?php

require_once("../../model/categorias/CategoriaModel.php");

use app\model\categorias\CategoriaModel;

function todos(){
    $categoriaModel = new CategoriaModel();
    return $categoriaModel->todos();
}

