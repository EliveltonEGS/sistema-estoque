<?php


$categoria = new app\entities\Categoria();

//$categoria->setId(2);
$categoria->setDescricao("cat 01");

$catModel = new app\model\categorias\CategoriaModel();
$catModel->adicionar($categoria);

