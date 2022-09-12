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

        $conteudo = $template->render($parametros);
        echo $conteudo;

      
       
      } catch (Exception $e) {
        echo $e->getMessage();
      }
    }

    public function update()
    {
      var_dump($_POST['id']);
      Cadastro::update();
      //try {
      //  

     
        
      //  echo '<script>alert("Publicação alterada com sucesso!");</script>';
      //  echo '<script>location.href="http://localhost/macielSevilha-php/projeto/index.php?pagina=produto";</script>';

     // } catch (Exception $e) {
     //     echo '<script>alert("'.$e->getMessage().'");</script>';
      //    echo '<script>location.href="http://localhost/macielSevilha-php/projeto/index.php?pagina=editar&metodo=change&id='.$_POST['id'].'";</script>';
     // }
    
      
    }

  }

?>