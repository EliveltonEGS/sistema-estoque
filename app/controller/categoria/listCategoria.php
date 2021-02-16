<?php

require '../../model/categorias/CategoriaModel.php';

function todos(){
    $categoriaModel = new app\model\categorias\CategoriaModel();
    return $categoriaModel->todos();
}

