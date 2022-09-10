<?php
  
  class EditarController 
  {
    public function change($paramId) 
    {
      try {

        $loader = new \Twig\Loader\FilesystemLoader('app/view');
        $twig = new \Twig\Environment($loader);
        $template = $twig->load("editar.html");
 
       
        $modificar = Cadastro::selecionaPorId($paramId);

        $parametros = array();
        $parametros['id'] = $modificar->id;
        $parametros['nome'] = $modificar->nome;
        $parametros['quantidade'] = $modificar->quantidade;
        $parametros['preco'] = $modificar->preco;
        $parametros['codBarra'] = $modificar->codBarra;

        $n = array($parametros['nome']);
        $q = array($parametros['quantidade']);
        $p = array($parametros['preco']);
        $c = array($parametros['codBarra']);

        $colecao = array($n, $q, $p, $c);
        
    
        $alterar = Cadastro::alterar($paramId, $colecao);

        $conteudo = $template->render($parametros);
        echo $conteudo;
      } catch (Exception $e) {
        echo $e->getMessage();
      }
    }

  }

?>