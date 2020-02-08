<?

include_once "controller/CarrouselController.php";
include_once  "controller/MenuController.php";
include_once "controller/ServicoController.php";
include_once "controller/ClienteController.php";

$cliente = new ClienteController();
$servico = new ServicoController();

$clientes = $cliente->listarCliente();
$servicos = $servico->listarServico();
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23839206-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-23839206-2');
    </script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: "ca-pub-4586128867227436",
            enable_page_level_ads: true
        });
    </script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>AFD Solution - Desenvolvimento de sites</title>
</head>
<body>
    <div class="col-12 text-white p-2 topo text-right">
        <span class="pr-3"><a href="https://api.whatsapp.com/send?phone=5565999860124" target="_blank" style="text-decoration: none !important;;color: #FFFFFF;"><img src="assets/images/icons/whatsapp-logo.png"> (65) 99986-0124</a></span>
        <span class="pr-3"><a href="https://www.facebook.com/afdsolution1" target="_blank" style="text-decoration: none!important;;color: #FFFFFF;"><img src="assets/images/icons/facebook-logo.png"> afdsolution1</a> </span>
        <span><a href="https://www.instagram.com/afdsolution/" target="_blank" style="text-decoration: none !important;color: #FFFFFF;"><img src="assets/images/icons/instagram-logo.png"> @afdsolution</a> </span>
    </div>
    <?php
    include_once "menu.php";
    include_once "galeria.php";
    ?>
    <div class="container mt-5">
        <div class="row">
            <? foreach($servicos as $key => $value){ ?>
            <div class="col-3 card p-4 m-auto text-white" style="background-color: #293462">
                <img src="<?=$value->icon?>" class="card-img-top">
                <div class="card-body">
                    <h6 class="card-title text-center"><?=$value->titulo?></h6>
                    <p class="card-text text-justify"><?=$value->descricao?></p>
                </div>
            </div>
            <? } ?>
        </div>
    </div>
    <div class="col-12">&nbsp;</div>
    <div class="col-12" id="portifolio" style="background-color: #f7be16">
    <div class="container mt-5 p-5">
        <div class="row">
            <? foreach($clientes as $key => $value){ ?>
                <div class="col-3 card p-4 m-auto">
                    <img src="<?=$value->imagem?>" class="card-img-top">
                    <div class="card-body">
                        <h6 class="card-title"><?=$value->nome?></h6>
                        <p class="card-text text-justify">
                            <? if(!empty($value->link)) { ?>
                                <a href="<?=$value->link?>" target="_blank"><img src="assets/images/icons/link-24.png"></a>
                            <? } ?>
                            <? if(!empty($value->facebook)) { ?>
                                <a href="<?=$value->facebook?>" target="_blank"><img src="assets/images/icons/facebook-24.png"></a>
                            <? } ?>
                            <? if(!empty($value->instagram)) { ?>
                                <a href="<?=$value->instagram?>" target="_blank"><img src="assets/images/icons/instagram-24.png"></a>
                            <? } ?>
                            <? if(!empty($value->linkedin)) { ?>
                                <a href="<?=$value->linkedin?>" target="_blank"><img src="assets/images/icons/linkedin-24.png"></a>
                            <? } ?>
                        </p>
                    </div>
                </div>
            <? } ?>
        </div>
    </div>
    </div> <div class="col-12">&nbsp;</div>
    <div class="col-12" id="contato">
        <div class="container mt-5 p-5">
            <div class="row">
                <div class="col-7">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3843.2543052658402!2d-56.11875918527957!3d-15.578055921820829!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x939db3d643fa460b%3A0x42a589f0e91648a8!2sR.+Mariana+-+Jardim+Mariana%2C+Cuiab%C3%A1+-+MT!5e0!3m2!1spt-BR!2sbr!4v1566440031888!5m2!1spt-BR!2sbr" class="col-12" height="400"  frameborder="0" style="border:0" allowfullscreen></iframe>
                 </div>
                <div class="col-5">
                    <form method="post" action="salvar.php">
                        <input type="hidden" name="action" value="contato"/>
                        <div class="form-group">
                            <label for="nome"><b>Nome <sup>(*)</sup></b></label>
                            <input type="text" class="form-control" id="nome" name="nome"  placeholder="Digite seu nome" required>
                        </div>
                        <div class="form-group">
                            <label for="email"><b>E-mail <sup>(*)</sup></b></label>
                            <input type="text" class="form-control" id="email" name="email"  placeholder="Digite seu e-mail" required>
                        </div>
                        <div class="form-group">
                            <label for="telefone"><b>Telefone <sup>(*)</sup></b></label>
                            <input type="text" class="form-control" id="telefone" name="telefone" maxlength="11" placeholder="Digite seu telefone" required>
                        </div>
                        <div class="form-group">
                            <label for="assunto"><b>Assunto <sup>(*)</sup></b></label>
                            <select class="form-control" name="assunto" id="assunto" required>
                                <option>Selecione</option>
                                <option value="Orçamento">Orçamento</option>
                                <option value="Dúvidas">Dúvidas</option>
                                <option value="Sugestões">Sugestões</option>
                                <option value="Outros">Outros</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="mensagem"><b>Mensagem <sup>(*)</sup></b></label>
                            <textarea class="form-control" name="mensagem" id="mensagem" required cols="10" rows="5"></textarea>
                        </div>
                        <input type="submit" class="btn btn-primary btn-block" value="Enviar" name="botao">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12">&nbsp;</div>
    <div class="col-12" id="portifolio" style="background-color: #f7be16">
        <div class="container mt-5 p-5">
            <div class="row">
                <div class="col-10">&nbsp;</div>
                <div class="col-2 text-white"><b>Redes Sociais:</b><br/><br/>
                    <a href="https://api.whatsapp.com/send?phone=5565999860124" target="_blank" style="text-decoration: none !important;;color: #FFFFFF;"><img src="assets/images/icons/whatsapp.png"></a>
                    <a href="https://www.facebook.com/afdsolution1" target="_blank" style="text-decoration: none!important;;color: #FFFFFF;"><img src="assets/images/icons/facebook.png"></a>
                    <a href="https://www.instagram.com/afdsolution/" target="_blank" style="text-decoration: none !important;color: #FFFFFF;"><img src="assets/images/icons/instagram.png"></a> </div>
                <div class="col-12 text-center text-white" style="font-size: 12px"><img src="assets/images/logo/logo-somente-imagem-30-1.png"><b>Desenvolvido por AFD Solution.</b> </div>
            </div>
        </div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="https://cdnjs.com/libraries/jquery.mask"></script>
<script>
    $(document).ready(function() {
        $('#telefone').mask('(00) 0000-0000');

        <? if($_GET['msg'] == 1){ ?>
        toastr.success('Mensagem enviada com sucesso!');
        <? }else if($_GET['msg'] == 2){ ?>
        toastr.error('Não foi possível enviar a mensagem!');
        <? } ?>
    });

    $('.carousel').carousel({
        interval: 2000
    });

    var $doc = $('html, body');
    $('a').click(function() {
        $doc.animate({
            scrollTop: $( $.attr(this, 'href') ).offset().top
        }, 500);
        return false;
    });

</script>
</body>
</html>