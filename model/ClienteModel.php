<?php

include_once "Conexao.php";

class ClienteModel extends Conexao
{
    public function listarCliente()
    {
        $sql = "SELECT * FROM cliente WHERE status = 1";
        $statement = Conexao::prepare($sql);
        $statement->execute();
        return $statement->fetchAll();
    }
}