<?php include('config.php'); ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Project B-OnTec</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="palavras-chaves,do,meu,site">
    <meta name="description" content="Descrição do meu website">
    
    <!-- Here stay, styles of CSS --> 
    
    <link href="<?php echo INCLUDE_PATH; ?>https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="<?php echo INCLUDE_PATH; ?>css/styles.css" rel="stylesheet" />
    
    <!--load all Font Awesome styles -->
    <link href="<?php echo INCLUDE_PATH; ?>css/all.css" rel="stylesheet">

    
</head>
<body>

    <?php
        $url = isset($_GET['url']) ? $_GET['url'] : 'home';
        switch ($url){
            case 'depoimentos':
                echo '<target targe="depoimentos" />';
                break;
            case 'servicos';
                echo '<target target="servicos" />';
        }
    ?>

    <!-- START OF HEADER -->
    <header>
        <div class="center">
            <div class="logo left"><a href="/">Logomarca <i class="fa-solid fa-computer"></i></a></div>
            <nav class="desktop right">
                <ul> 
                    <li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>depoimentos">Depoimentos</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
                </ul>
            </nav><!-- END DESKTOP -->

            <nav class="mobile right fixed-top">
                <div class="botao-menu-mobile">
                    <i class="fa-solid fa-bars"></i>
                </div>
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>depoimentos">Depoimentos</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>contato">Contatos</a></li>
                </ul>
            </nav><!-- END MOBILE -->
            <div class="clear"></div><!-- clear -->
        </div><!-- END CENTER -->
    </header>
    <!-- END OF HEADER -->

    <?php

        if(file_exists('pages/'.$url.'.php')){
            include('pages/'.$url.'.php');
        }else{
            //Podemos fazer o que quiser, pois a página não existe.
            if($url != 'depoimentos' && $url != 'servicos'){
                $pagina404 = true;
                include('pages/404.php');
            }else{
                include('pages/home.php');
            }
        }
    ?>

    <footer <?php if(isset($pagina404) && $pagina404 == true) echo 'class="fixed"'; ?>>
        <div class="center">
            <p>Todos os direitos reservados</p>
        </div>
    </footer>
    <script src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>js/scripts.js"></script>
    <?php
        if($url == 'home' || $url == ''){
    ?>
    <scritp src="<?php echo INCLUDE_PATH; ?>js/slider.js"></script>
    <?php } ?> 
    <?php
        if($url == 'contato'){
    ?>
    <script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyDHPNQxozOzQSZ-djvWGOBUsHKBUoT_qH4'></script>
    <script src="<?php echo INCLUDE_PATH; ?>js/map.js"></script>
    <?php } ?>
</body>
</html> 