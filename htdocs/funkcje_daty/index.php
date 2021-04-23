<?php
$data = getdate();
$dzien = $data["mday"];
$miesiac = $data["mon"];
$rok = $data["year"];
if ($dzien < 10) $dzien = 0 . $dzien;
if ($miesiac < 10) $miesiac = 0 . $miesiac;
echo "Dzisiaj jest $dzien-$miesiac-$rok";

echo "<br><br>";


echo date("y-m-d") . "<br>";
echo date("d F Y") . "<br>";
echo date("g:i a") . "<br>";

echo "<br><br>";

$data = mktime(10,15,5,11,30,1998);
echo date("d-m-Y G:i", $data);
?>

<a href="kolo.php">koło</a>
<a href="trojkat.php">trojkąt</a>
<a href="tabele.php">tabele</a>