<?php
  
  class ProdutoController 
  {
    public function index() 
    {
      try {
        $loader = new \Twig\Loader\FilesystemLoader('app/view');
        $twig = new \Twig\Environment($loader);
        $template = $twig->load("produto.html");

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