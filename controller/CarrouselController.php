<?php

include_once "model/CarrouselModel.php";

class CarrouselController
{

    public function indicador()
    {
        $indicador = new CarrouselModel();
        return $indicador->Galeriaindicadores();
    }

    public function galeria()
    {
        $galeria = new CarrouselModel();
        return $galeria->Galeriaimagem();
    }

}