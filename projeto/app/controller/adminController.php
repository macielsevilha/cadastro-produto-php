<?php
  class AdminController 
  {
   
    public function insert()
    {
       
      try {
        $dados = Cadastro::insert($_POST); 
        if(!$dados == null){
          echo '<script>alert("Publicação inserida com sucesso!");</script>';
          echo '<script>location.href="http://localhost/macielSevilha-php/projeto/index.php?pagina=produto";</script>';
        } 
      
      } catch (Exception $e) {
        //echo '<script>alert("'.$e->getMessage().'");</script>';
        
      }

    }

    public function create() 
    {
      echo '123';
    }

    public function change($paramId) 
    {
      try {
    
        $loader = new \Twig\Loader\FilesystemLoader('app/view');
        $twig = new \Twig\Environment($loader);
        $template = $twig->load("update.html");
       
        $modificar = Cadastro::selecionaPorId($paramId);

        $parametros = array();
        $parametros['id'] = $modificar->id;
        $parametros['nome'] = $modificar->nome;
        $parametros['quantidade'] = $modificar->quantidade;
        $parametros['preco'] = $modificar->preco;
        $parametros['codBarra'] = $modificar->codBarra;


        $conteudo = $template->render($parametros);
        echo $conteudo;
      } catch (Exception $e) {
        echo $e->getMessage();
      }
    }

    public function update() 
    {
     
      Cadastro::update($_POST);
    }
  
  }
?>