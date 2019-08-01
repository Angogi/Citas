<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM user_questions";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      //  echo "user_recive_question_id: " . $row["user_recive_question_id"]. " - user_send_question_id: " . $row["user_send_question_id"]. " user_question_id: " . $row["user_question_id"]. "<br>";
      $personas = array($row);

      for ($i=0; $i < sizeof($personas); $i++) { 
         # code...
      }
      $preguntasUsuario = "SELECT user_id, user_send_question_id, user_question_id FROM user_questions";
      $getQuestionAndUsers = mysqli_query($conn, $preguntasUsuario);
      }
} else {
    echo "0 results";
}

mysqli_close($conn);

$preguntas = array("Alexandro", "Arnau", "Camilo",
                "Carlos", "Delfina","Enric", "Erik","Ferran",
                "Franco", "Janina","Jason", "Kavan", "Manuela",
                "Nathalia", "Nellay", "Noelia", "Nuria", "Raul",
                "Sergi", "Shuangjie", "Solomon", "Unai","Andres",
                "Thierry");
?>

<?php

/*function selectq(){
   $queryselectq = "select * from questions";
   $conn->
}*/

foreach ($preguntas as $value) {
   echo "<li id='source' draggable='true' ondragstart='drag(event)'>$value</li>";
}
?>