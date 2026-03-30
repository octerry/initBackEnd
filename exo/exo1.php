<?php

function square($n) {
    return $n **2;
}

function square_multiply($n, $n2) {
    return square($n) * $n2;
}

echo square_multiply(4, 2);

?>