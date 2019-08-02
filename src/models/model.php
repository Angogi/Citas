<?php
namespace Citas\models;

class model{
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "mydb";
    
    function connection(){
       
        $connect = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname);
        if ($connect) {
            return array("estas on", $connect);

        } 
        
    }
    
    function getQuestions(){
        $sql = "SELECT * FROM user_questions";
        $result = mysqli_query($connect, $sql);
    }
}

?>