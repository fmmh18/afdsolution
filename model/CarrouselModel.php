<?php

    include_once "Conexao.php";

class CarrouselModel extends Conexao
{

    public function Galeriaindicadores()
    {
        $sql = "SELECT COUNT(*) AS indicador FROM galeria";
        $statement = Conexao::prepare($sql);
        $statement->execute();
        return $statement->fetchObject()->indicador;
    }

    public function Galeriaimagem()
    {
        $sql = "SELECT * FROM galeria WHERE status = 1 ORDER BY ordem";
        $statement = Conexao::prepare($sql);
        $statement->execute();
        return $statement->fetchAll();
    }
}