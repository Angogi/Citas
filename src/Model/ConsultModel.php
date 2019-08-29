<?php
namespace Citas\Model;
use Citas\Model\Connection;

class ConsultModel extends Connection
{
    function saveConsultaDeCoder()
    {
        $connection = new Connection();
        $conn = $connection->connection();

        $nombreEmisor = $_POST["nombreEmisor"] . "<br>";
        $nombreReceptor = $_POST["nombreReceptor"] . "<br>";
        $consulta = $_POST["consulta"] . "<br>";
        $date = $_POST["date"];
 
        $_GRABAR_SQL = "INSERT INTO $consultas (id, nombreEmisor, consulta) VALUES ('$id_consulta','$user_id','$question_text', )";
        
        mysql_query($_GRABAR_SQL);
 
    }

    function printConsultaDeCoder()
    {
       $connection = new Connection();
       $conn = $connection->connection();
 
       $sql = "SELECT consultas.question_text , usuarios.user_name FROM consultas , usuarios WHERE consultas.id_consulta = usuarios.user_id AND usuarios.user_name = usuarios.user_id";
 
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
 
}

$obj = new ConsultModel();
$obj->saveConsultaDeCoder();