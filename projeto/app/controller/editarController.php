<?php
  
  class EditarController 
  {
    public function index() 
    {
      try {

        $coletarProdutos = Cadastro::selecionaTodos();
       
        $loader = new \Twig\Loader\FilesystemLoader('app/view');
        $twig = new \Twig\Environment($loader);
        $template = $twig->load("editar.html");

        $parametros = array();
        $parametros['cadastro'] = $coletarProdutos;

      } catch (Exception $e) {
        echo $e->getMessage();
      }
    }
  
  }

?>