<?php
    function connection()
    {
      try 
      {
        $con=new PDO('mysql:host=localhost;
              dbname=immobilier;
              charset=utf8',
              'root',''
            );
        return $con;
      } 
      catch (Exception $e) 
      {
        echo $e -> getMessage();
      }
    }
?>
