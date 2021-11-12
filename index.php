<?php

    require_once 'app/Core/core.php';
    require_once 'app/Controller/HomeController.php';
    require_once 'app/Controller/ErroController.php';
    require_once 'app/Model/Postagem.php';
    require_once 'app/Lib/Database/Connection.php';
    require_once 'vendor/autoload.php';
    $template = file_get_contents('app/Template/estrutura.html');
    ob_start();    
        $core = new Core;
        $core->start($_GET);

        $saida = ob_get_contents();
    ob_end_clean();
    $tpl = str_replace('{{area_dinamica}}', $saida, $template);
    echo $tpl;
?>