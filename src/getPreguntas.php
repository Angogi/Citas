<?php


 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "mydb";


 $conn = mysqli_connect($servername, $username, $password, $dbname);


$sql = "SELECT questions.question_text , usuarios.user_name FROM questions , usuarios, user_questions WHERE questions.question_id = user_questions.question_id AND user_questions.user_send_question_id = usuarios.user_id";

$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0)
{
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      echo "<li id='source' draggable='true' ondragstart='drag(event)'><b>" . $row["user_name"] ."</b> " .$row["question_text"]."</li>";
      }
} else 
{ 
    echo "0 results";
}

mysqli_close($conn);

?>

<?php

//$sql2 = "SELECT usuarios.user_name FROM user_questions, usuarios WHERE usuarios.user_id = user_questions.user_recive_question_id";

//$sql = "SELECT usuarios.user_name  AS envia FROM usuarios, user_questions WHERE user_questions.user_send_question_id = usuarios.user_id;";

?>