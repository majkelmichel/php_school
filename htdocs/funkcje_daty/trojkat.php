<?php
function rysuj_trojkat($n) {
    echo "<pre>";
    $counter = 1;
    for ($i = 1; $i <= $n; $i++) {
        $spaces = "";
        for ($j = 0; $j < $n - $i; $j++) {
            $spaces .= " ";
        }
        echo $spaces;
        $stars = "";
        for ($j = 0; $j < $counter; $j++) {
            $stars .= "*";
        }
        echo $stars;
        echo "<br>";
        $counter += 2;
    }
    echo "<pre>";
}

rysuj_trojkat(5);
rysuj_trojkat(11);