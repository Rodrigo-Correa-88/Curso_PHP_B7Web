<?php

/* Princípio de Inversão de dependência */

interface DBConection {
    public function connect();
}

class MySQLConnection implements DBConection {
    public function connect() {}
}

class OracleConnection implements DBConection {
    public function connect() {}
}

class MongoConnection implements DBConection {
    public function connect() {}
}

class UsuarioDAO {
    private $db;
    
    public function __construct(DBConection $db_com)
    {
        $this->db = $db_com;
    }
}


$db_com = new MongoConnection();
$usuario_DAO = new UsuarioDAO($db_com);
