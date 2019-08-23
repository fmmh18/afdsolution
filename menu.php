<?
$menus = new MenuController();
$menu = $menus->mostrarMenu();
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #dda90f !important">
    <a class="navbar-brand" href="#"><img src="assets/images/logo/logo-somente-imagem-60-1.png"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav m-auto">
            <?  foreach ($menu as $key =>$value) { ?>
            <li class="nav-item">
                <a class="nav-link text-white text-center" href="<?php echo $value->link; ?>"><?php echo $value->titulo; ?></span></a>
            </li>
            <?  } ?>
        </ul>

    </div>
</nav>