<?php
function oblicz_brutto($netto) {
    $vat = $netto * 0.23;
    $brutto = $netto + $vat;
    echo $netto . "<br>" . $vat . "<br>" . $brutto . "<br>";
}

oblicz_brutto(1000);
oblicz_brutto(50);