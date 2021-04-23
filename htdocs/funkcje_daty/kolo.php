<?php
function rysuj_kolo($n)
{
    echo "<pre>";
    $n_out = $n + 0.4;
    for ($y = $n; $y >= -$n; --$y )
    {
        for ( $x = -$n; $x <= $n; $x += 1)
        {
            $value = $x * $x + $y * $y;
            if ($value <= $n_out * $n_out)
            {
                echo '* ';
            }
            else
            {
                echo '  ';
            }
        }
        echo "<br>";
    }
    echo "</pre>";
}
rysuj_kolo(5);
rysuj_kolo(9);