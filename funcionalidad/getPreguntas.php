<?php
$preguntas = array("Alexandro", "Arnau", "Camilo",
                "Carlos", "Delfina","Enric", "Erik","Ferran",
                "Franco", "Janina","Jason", "Kavan", "Manuela",
                "Nathalia", "Nellay", "Noelia", "Nuria", "Raul",
                "Sergi", "Shuangjie", "Solomon", "Unai","Andres",
                "Thierry");
?>

<?php
foreach ($preguntas as $value) {
   echo "<li id='source' draggable='true' ondragstart='drag(event)'>$value</li>";
}
?>