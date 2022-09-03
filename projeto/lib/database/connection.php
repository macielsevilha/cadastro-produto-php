<?php
  abstract class Connection
  {
    private static $conn;

    public static function getConn()
    {
        if (seLf::$conn == null) {
            seLf::$conn = new PDO('mysql: host=localhost; dbname=cadastro_produto;', 'root', '');
        } 

        return seLf::$conn;
    }
  }

?>