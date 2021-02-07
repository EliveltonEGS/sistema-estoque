<?php

namespace app\data;

class Conexao {

    public function conexao() {
        $conexao = mysqli_connect("localhost", "root", "", "sistema");
    }

}
