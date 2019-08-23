<?php

include_once "model/ClienteModel.php";

class ClienteController
{
    public function listarCliente()
    {
        $cliente = new ClienteModel();
        return $cliente->listarCliente();
    }
}