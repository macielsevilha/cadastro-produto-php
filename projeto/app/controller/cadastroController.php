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

        $coletarCadastros = Cadastro::selecionaTodos();

        $teste = Cadastro::insert($_POST); 

      

        var_dump($_POST['nome']);
     
        
      } catch (Exception $e) {
        echo $e->getMessage();
      }

      
    }
    public function insert()
    {
    
    }
  }

?>