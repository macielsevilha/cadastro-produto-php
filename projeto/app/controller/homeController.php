<?php
  
  class HomeController 
  {
    public function index() 
    {
      try {
       
        $loader = new \Twig\Loader\FilesystemLoader('app/view');
        $twig = new \Twig\Environment($loader);
        $template = $twig->load("home.html");

        $parametros = array();
        $parametros['nome'] = 'Maciel';

        $conteudo = $template->render($parametros);
        echo $conteudo;

      } catch (Exception $e) {
        echo $e->getMessage();
      }
    }
  
  }

?>