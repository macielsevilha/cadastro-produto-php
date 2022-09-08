<?php
  
  class ProdutoController 
  {
    public function index() 
    {
      try {
        $coletarProdutos = Cadastro::selecionaTodos();
        $loader = new \Twig\Loader\FilesystemLoader('app/view');
        $twig = new \Twig\Environment($loader);
        $template = $twig->load("produto.html");

        $parametros = array();
        $parametros['cadastro'] = $coletarProdutos;

        $conteudo = $template->render($parametros);
        echo $conteudo;
      } catch (Exception $e) {
        echo $e->getMessage();
      }
    }
  }

?>