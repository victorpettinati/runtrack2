<?php
for ($i = 0; $i <= 1337; $i++) {
    if ($i == 26 || $i == 37 || $i == 88 || $i == 1111) {
        continue; // Passe à l'itération suivante si le nombre est dans la liste des exclusions
    }
    echo $i . "<br />";
}
?>

