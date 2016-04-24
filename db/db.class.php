<?php

require_once './config/Funcs.php';//puxa as funções

class Db extends Funcs {

    private $user = "root"; // root
    private $pass = "root"; 
    private $host = "localhost"; // servidor
    private $database = "gestao"; // nome do BD

    private function Connect() {

        $conn = new PDO("mysql:host=$this->host;dbname=$this->database", $this->user, $this->pass);
        return $conn;
    }

    public function RunQuery($sql) {
        $stm = $this->Connect()->prepare($sql);
        return $stm->execute();
    }

    public function RunSelect($sql) {
        $stm = $this->Connect()->prepare($sql);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);//retorna em formato de array
    }

}

?>