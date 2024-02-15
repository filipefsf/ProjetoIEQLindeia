<?php
    $autoload = function($class){
        if($class == 'Email'){
            include('classes/phpmailer/src/PHPMailer.php');
        }
        include('classes/'.$class.'.php');
    };

    spl_autoload_register($autoload);

    define ('INCLUDE_PATH','http://localhost/Projeto%20Igreja/'); //diretorio raiz do site

?>