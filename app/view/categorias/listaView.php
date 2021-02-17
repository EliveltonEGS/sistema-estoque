<?php
require_once("../templates/header.php");
require_once '../../controller/categoria/listaCategoriaController.php';

$listar = todos();
?>

<div class="container mt-3">
    <table class="table table-hover">
        <thead>
            <tr class="bg-primary text-light">
                <th>Descrição</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($listar as $value) { ?>
                <tr>
                    <td><?= $value["descricao"] ?></td>
                    <td>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<?php require_once("../templates/footer.php"); ?>
