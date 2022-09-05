<?php
  
  class CadastroController 
  {
    public function index() 
    {
      try {
        $loader = new \Twig\Loader\FilesystemLoader('app/view');
        $twig = new \Twig\Environment($loader);
        $template = $twig->load("cadastro.html");
        $parametros = array();
        $parametros['nome'] = 'rafael';

        $conteudo = $template->render($parametros);
        echo $conteudo;
        
        Cadastro::selecionaTodos();
        AdminController::insert();
        
      } catch (Exception $e) {
        echo $e->getMessage();
      }

      
    }
  }

?>