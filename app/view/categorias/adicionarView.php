<?php require_once("../templates/header.php"); ?>

<div class="container">
    <div id="tabelaLoad"></div>
    <form class="form-row form-group" id="frmCategoria">
        <div class="col-md-12">
            <label>Descrição</label>
            <input id="descricao" name="descricao" type="text" class="form-control">
        </div>
        <div class="col-md-12 mt-2 text-center">
            <input type="button" class="btn btn-primary" value="Salvar" name="salvar">
        </div>
    </form>
</div>

<!--jquery-->
<script src="../../../public/jquery/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        $("#tabelaLoad").load("listaView.php");

        var dados = $("#frmCategoria").serialize();

        $.ajax({
            type: 'POST',
            url: "../../controller/categoria/adicionarController.php",
            async: true,
            data: dados,
            success: function (response) {
                if(response == 1){
                    alert("salvo com sucesso");
                }
            }
        });
    });
</script>
<?php require_once("../templates/header.php"); ?>