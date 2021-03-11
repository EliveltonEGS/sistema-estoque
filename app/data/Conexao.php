<?php

namespace app\data;

use PDO;
use PDOException;

require 'config.php';

class Conexao {

    public function conectar() {
        try {
            $conn = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
            return $conn;
        } catch (PDOException $ex) {
            throw new \Exception("->Erro connection database<-");
        }
    }

}
