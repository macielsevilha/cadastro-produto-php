<?php
  class AdminController 
  {
    public function insert()
    {
      try {
        Cadastro::insert($_POST); 
        echo '<script>alert("Publicação inserida com sucesso!");</script>';
        echo '<script>location.href="http://localhost/macielSevilha-php/projeto/index.php?pagina=produto";</script>';
      } catch (Exception $e) {
        echo '<script>alert("'.$e->getMessage().'");</script>';
      }
    }
  }
?>