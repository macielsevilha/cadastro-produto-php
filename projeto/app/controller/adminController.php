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
      try {
        Cadastro::update($_POST);

        echo '<script>alert("Publicação alterada com sucesso!");</script>';
        echo '<script>location.href="http://localhost/macielSevilha-php/projeto/index.php?pagina=produto&metodo=index";</script>';
     
      } catch (Exception $e) {
        echo '<script>alert("'.$e->getMessage().'");</script>';
      }
    }

    public function delete() {
     
      try {
        Cadastro::delete($_GET['id']);
        echo '<script>alert("Publicação deletada com sucesso!");</script>';
        echo '<script>location.href="http://localhost/macielSevilha-php/projeto/index.php?pagina=produto&metodo=index";</script>';
      } catch (Exception $e) {
        echo '<script>alert("'.$e->getMessage().'");</script>';
      }
    }
  }
?>