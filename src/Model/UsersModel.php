<?php

namespace Citas\Model;
//include_once "../../vendor/autoload.php";
use Citas\Model\Connection;

class UsersModel extends Connection
{

   function getListadoCoders()
   {
      $connection = new Connection();
      $conn = $connection->connection();

      $sql = "SELECT * FROM usuarios WHERE usuarios.user_type = 0";

      $result = mysqli_query($conn, $sql);

      if (!mysqli_num_rows($result) > 0) 
      {
         // output data of each row
         return;
      }

      $arrayCoders = array();
      while ($row = mysqli_fetch_array( $result ))
      {
         $arrayCoders[] = array 
         (
            "userId" => $row['user_id'],
            "userName" => $row['user_name']
         );
      }
      return $arrayCoders;

   }

   function getListadoFormadores()
   {
      $connection = new Connection();
      $conn = $connection->connection();

      $sql = "SELECT * FROM usuarios WHERE usuarios.user_type = 1";

      $result = mysqli_query($conn, $sql);

      if (!mysqli_num_rows($result) > 0) 
      {
         // output data of each row
         return;
      }
      $arrayFormadores = array();
      while ($row = mysqli_fetch_array( $result ))
      {
         $arrayFormadores[] = array 
         (
            "userId" => $row['user_id'],
            "userName" => $row['user_name']
         );
      }
      return $arrayFormadores;
   }


   
}

// $objeto = new UsersModel();
// $objeto->getListadoFormadores();

