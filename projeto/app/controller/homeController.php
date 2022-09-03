<?php
  
  class HomeController 
  {
    public function index() 
    {
      try {
       
        $loader = new \Twig\Loader\FilesystemLoader('app/pages');
        $twig = new \Twig\Environment($loader);
        $template = $twig->load("home.html");

        $parametros = array();
        $parametros['nome'] = 'rafael';

        $conteudo = $template->render($parametros);
        echo $conteudo;

        $coletarCadastros = Cadastro::selecionaTodos();

        var_dump($coletarCadastros);

      } catch (Exception $e) {
        echo $e->getMessage();
      }
    }
  
  }

?>