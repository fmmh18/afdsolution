<?php


include_once "model/MenuModel.php";

class MenuController
{
    public function mostrarMenu()
    {
        $menu = new MenuModel();

        return $menu->listarMenu();
    }

}