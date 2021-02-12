<?php

$categoria = new \app\entities\Categoria();
$usuario = new app\entities\Usuario();

$categoria->setId(2);
$categoria->setDescricao("produto");

$catModel = new app\model\categorias\CategoriaModel();
$res = $catModel->buscarPorId(2);

print_r($res['nome_categoria']);


