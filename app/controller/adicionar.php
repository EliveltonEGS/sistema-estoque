<?php

require("../../vendor/autoload.php");

use app\entities\Categoria;
use app\model\CategoriaModel;

$categoria = new Categoria();
$categoriaModel = new CategoriaModel();

$categoria->setDescricao(filter_input(INPUT_POST, 'categoria', FILTER_SANITIZE_STRING));

$result = $categoriaModel->buscaCategoria($categoria);
// if($result){
//     echo json_encode("categoria já cadastrada!");
// }else{
//     $categoriaModel->savar($categoria);
//     echo json_encode("salvo com sucesso!");
// }

$lista = array("descricao" => "not", "valor" => 500);
echo json_encode($lista);