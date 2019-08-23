<?php

include_once "model/ContatoModel.php";
class ContatoController
{

    public function salvarContato($data)
    {
        $contato = new ContatoModel();
        return $contato->salvar($data);

    }
}