<?php


$carrousel = new CarrouselController();
$galeria   = $carrousel->galeria();
$i = 0 ;

    echo "<div id='home'>";
    echo "<div id=\"carouselExampleIndicators\" class=\"carousel slide carousel-fade\" data-ride=\"carousel\">";
    echo "<div class=\"carousel-inner\">";
    foreach($galeria as $key => $value){
        if($i == 0){
            echo "<div class=\"carousel-item active\">";
            echo "<img src=".$value->path." class=\"w-100\">";
            echo " </div>";
        }else{
            echo "<div class=\"carousel-item\">";
            echo "<img src=".$value->path." class=\"w-100\">";
            echo " </div>";
        }
    $i++;
    }
    echo "<a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">";
    echo "<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>";
    echo "<span class=\"sr-only\">Previous</span>";
    echo "</a>";
    echo "<a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">";
    echo "<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>";
    echo "<span class=\"sr-only\">Next</span>";
    echo "</a>";
    echo " </div>";
    echo " </div>";
    echo " </div>";
