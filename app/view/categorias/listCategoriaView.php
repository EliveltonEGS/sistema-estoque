<?php
require '../../controller/categoria/listCategoria.php';

$categorias = todos();
?>
<table class="table table-hover table-condensed table-bordered" style="text-align: center;">
    <tr>
        <td>Categoria</td>
        <td>Editar</td>
        <td>Excluir</td>
    </tr>
    <tr>
        <?php foreach ($categorias as $value) { ?>
            <td><?= $value["descricao"] ?></td>
            <td>
                atualizar
            </td>
            <td>
                remover
            </td>
        <?php } ?>
    </tr>
</table>