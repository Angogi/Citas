<?php
$coders = array("Alexandro", "Arnau", "Camilo",
                "Carlos", "Delfina","Enric", "Erik","Ferran",
                "Franco", "Janina","Jason", "Kavan", "Manuela",
                "Nathalia", "Nellay", "Noelia", "Nuria", "Raul",
                "Sergi", "Shuangjie", "Solomon", "Unai","Andres",
                "Thierry");
?>

<?php
foreach ($coders as $value) {
   echo "<option value='$value'>$value</option>";
}
?>