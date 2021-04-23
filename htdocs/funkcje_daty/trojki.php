<?php
function trojki($s, $n) {
    for ($i = $s; $i <= $n; $i++) {
        if (hypot($i, $i + 1) == $i + 2) {
            echo $i . " " . ($i + 1) . " " . ($i + 2);
            echo "<br>";
        }
    }
}

trojki(2, 10);