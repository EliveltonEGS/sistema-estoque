<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../public/bootstrap/css/bootstrap.min.css">
</head>

<body>
    <form id="frm" class="p-5">
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="categoria">categoria</label>
                <input class="form-control btn-sm" style="width: 100%" type="text" name="categoria" id="categoria" autocomplete="off">
                <span id="recebe"></span>
            </div>
            <div class="form-group col-md-12 text-center">
                <button id="salvar" class="btn btn-primary btn-sm">salvar</button>
            </div>
        </div>
    </form>
    <script src="../../public/jquery/jquery.min.js"></script>
    <script>
        let inputs = document.querySelectorAll('#frm [name]');


        document.getElementById('salvar').addEventListener('click', function(event) {
            event.preventDefault();

            inputs.forEach(function(field, index) {
                if (field.value == "") {
                    console.log("campos obrigatórios!");
                } else {
                    let dadosForm = $('#frm').serialize();
                    $.ajax({
                        type: 'POST',
                        url: '../controller/adicionar.php',
                        data: dadosForm,
                        dataType: "json",
                        success: function(response) {
                            var res = JSON.parse(JSON.stringify(response));

                            if (res.valor == field.value) {

                                document.getElementById('recebe').innerHTML = res.valor;

                            } else {
                                document.getElementById('recebe').innerHTML = "O valor não existe";
                            }
                            // field.value = null;
                        }
                    });
                }

            });
        });
    </script>
</body>

</html>