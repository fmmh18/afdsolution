<?php

include_once "model/ServicoModel.php";

class ServicoController
{
    public function listarServico()
    {
        $servicos = new ServicoModel();
        return $servicos->listarServico();
    }

}