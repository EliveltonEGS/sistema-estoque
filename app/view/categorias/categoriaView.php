<?php require '../templates/header.php'; ?>

<div class="container mt-5">
    <div id="tabelaCategoriaLoad"></div>
</div>

<!--jquery-->
<script src="../../../public/jquery/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        $("#tabelaCategoriaLoad").load("listCategoriaView.php");
    });
</script>

<?php require '../templates/footer.php'; ?>