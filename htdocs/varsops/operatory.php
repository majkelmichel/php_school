<html lang="pl">
<body>
<?php
$x=12;
$y=8;
$suma=$x+$y;
$roznica=$x-$y;
$iloczyn=$x*$y;
$iloraz=$x/$y;
$reszta=$x%$y;
echo "Suma $x i $y wynosi $suma<br>";
echo "Róźnica $x i $y wynosi $roznica<br>";
echo "Iloczyn $x i $y wynosi $iloczyn<br>";
echo "Iloraz $x przez $y wynosi $iloraz<br>";
echo "Reszta z dzielenia $x przez $y wynosi $reszta<br>";
?>
<h2>bitowe</h2>
<?php
$x=125;
$y=41;
$iloczyn_bitowy=$x & $y;
$suma_bitowa=$x | $y ;
$roznica_sum=$x ^ $y;
$negacja=~$x;
echo "Iloczyn bitowy $x i $y wynosi $iloczyn_bitowy<br>";
echo "Suma bitowa $x i $y wynosi $suma_bitowa<br>" ;
echo " Różnica bitowa $x i $y wynosi $roznica_sum<br>";
echo "Negacja $x wynosi $negacja<br>";
?>
<h2>ify</h2>
<?php
$x=126;
if ($x%2==0) {
    echo 'Liczba jest parzysta';
}
else
{
    echo 'Liczba jest nieparzysta';
}
?>

</body>
</html>