<?php

 class Cadastro 
 {
    public static function selecionaTodos()
    {
        $con = Connection::getConn();

        $sql = "SELECT * FROM cadastro ORDER BY id DESC";
        $sql = $con->prepare($sql);
        $sql->execute();

        $resultado = array();

        while ($row = $sql->fetchObject('Cadastro')) {
            $resultado[] = $row;
        }

        return $resultado;

        var_dump($sql->fetchAll());
   
    }
 }

?>