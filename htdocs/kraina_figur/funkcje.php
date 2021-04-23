<?php
if (!function_exists('trojkat')) {
    function trojkat($a, $h) {
        return $a * $h / 2;
    }
}

function prostokat($a, $b) {
    return $a * $b;
}

function trapez($a, $b, $h) {
    return ($a + $b) * $h / 2;
}

function kolo($r) {
    return 3.14 * $r * $r;
}