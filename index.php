<?php

require './vendor/autoload.php';

$cModel = new app\model\CategoriaModel();

$dados = [7, 'Not', date('Y-m-d')];

$cModel->adiconar($dados);
