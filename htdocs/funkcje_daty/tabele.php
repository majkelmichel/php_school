<?php
function rysuj_tabele($x, $y) {
    echo "<table style='border: black solid 1px'><tbody>";
    for ($i = 0; $i < $x; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= $y; $j++) {
            echo "<td style='border: black solid 1px'>kolumna $j</td>";
        }
        echo "</tr>";
    }
    echo "</tbody></table>";
}

rysuj_tabele(4,5);