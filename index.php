<?php include('config.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>estilo/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="quadrangular,lindeia,igreja">
    <meta name="description" content="Igreja do Evangelho Quadrangular Lindeia - Lugar de restauração e vida">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>estilo/estilo.css">
    <title>IEQ Lindeia - Lugar de Restauração e vida</title>
</head>

<body>
    <?php
        $url = isset($_GET['url']) ? $_GET['url'] : 'home'; //se existir uma URL ? mantenha a URL, se não (:), vá para home
        switch ($url) {
            case 'sobre':
                echo '<target target ="sobre" />';
                break;
            
            case 'cultos':
                echo '<target target ="cultos" />';
                break;
        }

    ?>

    <header>
        <div class="center">
            <div class="logomarca left">
                <a href="<?php echo INCLUDE_PATH; ?>"><img src="imagens/logoieqmenu.png" alt="Logo IEQ"></a>
            </div><!--logomarca-->
            <nav class="menu right">
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH; ?>">Início</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>cultos">Cultos</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
                </ul>
            </nav><!--menu-->

            <nav class="mobile right">
                <div class="botao-menu-mobile">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </div>
                <ul>
                <li><a href="<?php echo INCLUDE_PATH; ?>">Início</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>cultos">Cultos</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
                </ul>
            </nav> <!--mobile-->
            <div class="clear"></div> <!--clear--->
        </div> <!--center-->
    </header>
    <?php
        
        if(file_exists('pages/'.$url.'.php')){
            include('pages/'.$url.'.php');
        } else {
            //Podemos fazer o que quiser pois a página não existe
            if($url != 'sobre' && $url != 'cultos'){
                include('pages/404.php');
            } else {
                include('pages/home.php');
            }
        }
    ?>
    <footer>
        <div class="center">
            <p>Todos os direitos reservados</p>
    </div> <!--center-->
    </footer>

    <script src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>js/scripts.js"></script>
    <script src="http://jqueryvalidation.org/files/dist/jquery.validate.js"></script>

    <?php
        if($url == 'contato'){
    ?>
    <script async defer src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCtVYBhnfNNIUXfGykrGAXPidHoGKX4EBo&callback=Function.prototype'></script>
    <script src="<?php echo INCLUDE_PATH; ?>js/map.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>js/validacao.js"></script>
    
    <?php }?>
</body>
</html>