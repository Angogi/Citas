<?php
$coders = array("Alexandro", "Amau", "Camilo",
                "Carlos", "Delfina","Enric", "Erik","Ferran",
                "Franco", "Janina","Jason", "Kavan", "Manuela",
                "Nathalia", "Nellay", "Noelia", "Nuria", "Raul",
                "Sergi", "Shuangjie", "Solomon", "Unai","Andres",
                "Thierry");
$fomadores = array("Edgar","David","Jennifer","Marina", "Ali");
?>
<?php
foreach ($coders as $value) {
   echo $value;
   echo "<select><option value='.$value.'>.$value.</option></select>";
 
}
?>