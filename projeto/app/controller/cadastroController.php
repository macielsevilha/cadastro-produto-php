<?php
  
  class CadastroController 
  {
    public function index() 
    {
      try {
        $loader = new \Twig\Loader\FilesystemLoader('app/pages');
        $twig = new \Twig\Environment($loader);
        $template = $twig->load("cadastro.html");

        $parametros = array();
        $parametros['nome'] = 'rafael';

        $conteudo = $template->render($parametros);
        echo $conteudo;
      } catch (Exception $e) {
        echo $e->getMessage();
      }
    }
  }

?>