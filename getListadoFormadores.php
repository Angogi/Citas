<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";


$conn = mysqli_connect($servername, $username, $password, $dbname);
$sql = "SELECT user_name FROM usuarios WHERE usuarios.user_type = 1";

$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
   // output data of each row
   while($row = mysqli_fetch_assoc($result)) {
      echo "<option>".$row['user_name']."</option>";
   }
} else {
   echo "0 results";
}
?>