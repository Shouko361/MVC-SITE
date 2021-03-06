<?php

    Class HomeController{
        
        public function index(){
            
            try {

                $posts = Postagem::selecionarTodos();
                $loader = new \Twig\Loader\FilesystemLoader('app/View');
                $twig = new \Twig\Environment($loader);
                $template = $twig->load('home.html');

                $parametros = array();
                $parametros['postagens'] = $posts;

                $conteudo = $template->render($parametros);
                echo $conteudo;

            } 
            catch(Exception $e){
                echo $e->getMessage();
            }
        }
    }

?>