<?php

class connectionDB{
    protected $dbname = "chessking";
    protected $dbhost = "localhost";
    protected $dbuser = "root";
    protected $dbpassword = "";
    protected $linkstart;

    function __construct() {
        $this->linkstart = new mysqli($this->dbhost, $this->dbuser, $this->dbpassword, $this->dbname);

        if ($this->linkstart->connect_error) {
            die("Erro na conexão com o banco de dados: " . $this->linkstart->connect_error);
        }
    }
}

?>