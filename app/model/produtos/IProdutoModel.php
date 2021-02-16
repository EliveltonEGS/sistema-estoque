<?php

namespace app\model\produtos;

interface IProdutoModel {

    public function adicionar(\app\entities\Produto $produto);

    public function atualizar(\app\entities\Produto $produto);

    public function buscarPorId(int $id);
}
