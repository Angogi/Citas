<?php
namespace Citas\Model;

class Connection
{
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "mydb";
    
    public function connection()
    {
        $connect = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname);
        
        if (!$connect) 
        {
            echo ("Fallo la conexion");
        }
        return $connect;
    }
}
    // function getQuestions(){
    //     $sql = "SELECT * FROM user_questions";
    //     $result = mysqli_query($connect, $sql);
    // }


?>