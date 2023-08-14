<?php

interface DataBase {
    public function listarProdutos();
    public function adicionarProdutos();
    public function alterarProdutos();
}    

class MysqlDB implements DataBase {
    public function listarProdutos() {

    }
    public function adicionarProdutos() {
        echo "Chamando Banco Mysql";
    }
    public function alterarProdutos() {

    }
}
class OracleDB implements DataBase {
    public function listarProdutos() {

    }
    public function adicionarProdutos() {
        echo "Chamando Banco Oracle";
    }
    public function alterarProdutos() {

    }
}

class MongoDB implements DataBase {

    public function listarProdutos() {

    }
    public function adicionarProdutos() {
        echo "Chamando Banco Mongo";
    }
    
    public function alterarProdutos() {

    }
}

$db = new OracleDB();
echo $db->adicionarProdutos();

?>