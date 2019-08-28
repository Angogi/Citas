<?php
namespace Citas\Model;
use Citas\Model\Connection;

class Model extends Connection
{

   function getListadoCoders()
   {
      $connection = new Connection();
      $conn = $connection->connection();

      $sql = "SELECT user_name FROM usuarios WHERE usuarios.user_type = 0";

      $result = mysqli_query($conn, $sql);

      if (!mysqli_num_rows($result) > 0) 
      {
         // output data of each row
         return;
      }

      while($row = mysqli_fetch_assoc($result)) 
      {
         echo "<option value='".$row['user_name']."'>".$row['user_name']."</option>";
      }

   }

   function getListadoFormadores()
   {
      $connection = new Connection();
      $conn = $connection->connection();

      $sql = "SELECT user_name FROM usuarios WHERE usuarios.user_type = 1";

      $result = mysqli_query($conn, $sql);

      if (!mysqli_num_rows($result) > 0) 
      {
         // output data of each row
         return;
      }

      while($row = mysqli_fetch_assoc($result)) 
      {
         echo "<option>".$row['user_name']."</option>";
      }
   }

   function printConsultaDeCoder()
   {
      $connection = new Connection();
      $conn = $connection->connection();

      $sql = "SELECT questions.question_text , usuarios.user_name FROM questions , usuarios, user_questions WHERE questions.question_id = user_questions.question_id AND user_questions.user_send_question_id = usuarios.user_id";

      $result = mysqli_query($conn, $sql);
      if (!mysqli_num_rows($result) > 0)
      {
         echo ("Falló la consulta");
         return;
         // output data of each row
         
      } 
      
      while($row = mysqli_fetch_assoc($result)) 
      {
         echo "<li id='source' draggable='true' ondragstart='drag(event)'><b>" . $row["user_name"] ."</b> " .$row["question_text"]."</li>";
      }
      mysqli_close($conn); 
   }

   // function saveConsultaDeCoder()
   // {
   //    $connection = new Connection();
   //    $conn = $connection->connection();

   //    $_GRABAR_SQL = "INSERT INTO $questions (id, usuario, consulta) VALUES ('$id','$usuario','$consulta', )";
      
   //    mysql_query($_GRABAR_SQL);

   // }
   
}


// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "mydb";


// $conn = mysqli_connect($servername, $username, $password, $dbname);


?>