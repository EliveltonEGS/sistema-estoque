<?php

namespace app\model\categorias;

use PDO;
use app\data\Conexao;
use app\entities\Categoria;

require_once("../../data/Conexao.php");

class CategoriaModel
{

    private $conexao;

    public function __construct()
    {
        $this->conexao = new Conexao();
    }

    public function adicionar(Categoria $categoria)
    {
        $sql = "insert into categoria(descricao) "
            . "values (:descricao)";

        $stmt = $this->conexao->conectar()->prepare($sql);

        $categoria = array(':descricao' => $categoria->getDescricao());
        $stmt->execute($categoria);
    }

    public function atualizar(Categoria $categoria)
    {
        $sql = "update categoria set descricao = :descricao where categoria_ida = :categoria_ida";

        $stmt = $this->conexao->conectar()->prepare($sql);

        $categoria = array(
            ':descricao' => $categoria->getDescricao(),
            ':categoria_ida' => $categoria->getId()
        );

        $stmt->execute($categoria);
    }

    public function buscarPorId(int $id)
    {
        $sql = "select * from categoria where categoria_ida = :id";

        $stmt = $this->conexao->conectar()->prepare($sql);

        $categoria = array(':categoria_id' => $id);
        $stmt->execute($categoria);
        return $stmt->fetch();
    }

    public function todos()
    {
        $sql = "SELECT * FROM categoria AS c ORDER BY c.categoria_id ASC";

        $stmt = $this->conexao->conectar()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
