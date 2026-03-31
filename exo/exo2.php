<?php 

function calculerMoyenne($n1, $n2, $n3) {
    $moyenne = ($n1 + $n2 + $n3) / 3;
    echo number_format($moyenne, 2, '.', ''), PHP_EOL;
    return $moyenne;
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