<?php

namespace app\model\categorias;

interface ICategoriaModel {

    public function adicionar(\app\entities\Categoria $categoria);

    public function atualizar(\app\entities\Categoria $categoria);

    public function buscarPorId(int $id);
}
