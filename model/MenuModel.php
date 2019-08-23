<?php

include_once "Conexao.php";
class MenuModel extends Conexao
{

    public function listarMenu()
    {
        $sql = "SELECT * FROM menu WHERE status = 1 ORDER BY id";
        $statement = Conexao::prepare($sql);
        $statement->execute();
        return $statement->fetchAll();
    }

}