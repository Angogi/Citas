<?php
namespace Citas;
include_once "../vendor/autoload.php";
use Citas\Model\Connection;

class EnvioForm extends Connection
{   
    function envioFormulario()
    {
        $conn = $this->connection();

        $nombreEmisor = $_POST["nombreEmisor"] . "<br>";
        $nombreReceptor = $_POST["nombreReceptor"] . "<br>";
        $consulta = $_POST["consulta"] . "<br>";
        $date = $_POST["date"];
    
        $_GRABAR_SQL = "INSERT INTO consultas (id_consulta, question_text, user_id) VALUES ('$nombreEmisor','$consulta','$question_text', )";
            
        mysqli_query($conn, $_GRABAR_SQL);
    }
}
?>