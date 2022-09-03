<?php
  class AdminController 
  {
    public function insert()
    {
       Cadastro::insert($_POST); 

       echo 'tetse';
       $coletarCadastros = Cadastro::selecionaTodos();

       var_dump($coletarCadastros);
    }
  }
?>