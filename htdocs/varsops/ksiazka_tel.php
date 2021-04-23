<html lang="pl">
<head>
    <title>Książka telefoniczna</title>
</head>
<body>
<?php
$mar = "Martin Szum";
$mich = "Michał Zawadzki";
$szuch = "Jakub Szuchniewicz";
$zar = "Jakub Zaręba";
$waw = "Kacper Wawryło";
$ksiazka = array(
    $mar => "+48 503 503 123",
    $mich => "+48 503 123 456",
    $szuch => "+48 503 456 123",
    $zar => "+48 500 100 100",
    $waw => "+48 502 654 123",
);
?>
<h2>ksiazka telefoniczna</h2>
<?php
echo "$mar: $ksiazka[$mar]<br>";
echo "$mich: $ksiazka[$mich]<br>";
echo "$szuch: $ksiazka[$szuch]<br>";
echo "$zar: $ksiazka[$zar]<br>";
echo "$waw: $ksiazka[$waw]<br>";
?>

<a href="index.php">index</a>
</body>
</html>