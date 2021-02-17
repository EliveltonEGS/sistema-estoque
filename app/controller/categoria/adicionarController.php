<?php

require_once("../../model/categorias/CategoriaModel.php");
require_once("../../entities/Categoria.php");

use app\model\categorias\CategoriaModel;
use app\entities\Categoria;

$descricao = isset($_POST['descricao']) ? $_POST['descricao'] : "";

$categoria = new Categoria();
$categoria->setDescricao($descricao);

$cModel = new CategoriaModel();
$cModel->adicionar($categoria);
