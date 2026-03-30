<?php 

function calculerMoyenne($n1, $n2, $n3) {
    return ($n1 + $n2 + $n3) / 3;
}

function afficherResultat($nom, $moyenne) {
    if ($moyenne >= 10) {
        return "Suffisant";
    } else {
        return "Insuffisant";
    }
}

echo afficherResultat("Alice", calculerMoyenne(10,15,8));

?>