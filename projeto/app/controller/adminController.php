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
  
  }
?>