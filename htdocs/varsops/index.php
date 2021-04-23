<html lang="pl">
<title>
    Zmienne
</title>
<body>
<h1>Zmienne i operatory</h1>
<?php
$x = 18;
$tekst = "Anna Kowalska";
$y = $x - 5;

echo "Witamy na strone użytkownika: <b> $tekst </b>";
echo "<br>Wykonajmy dodawanie liczby x oraz y:<br>";
echo "$x + $y =";
echo $x + $y;
?>
<br>
<?php
echo "<br>Za pomocą jednej instrukcji echo możemy otrzymać to samo:<br>";
echo "$x + $y = " . ($x + $y);
?>
<br>
<?php
$bool = true;
echo "<br>typ zmiennej x " . gettype($x);
echo "<br>typ zmiennej y " . gettype($y);
echo "<br>typ zmiennej tekst " . gettype($tekst);
echo "<br>typ zmiennej bool " . gettype($bool);
echo "<br>czy bool jest boolean " . is_bool($bool);
?>
<br>
<?php
// metoda 1
$metoda1 = "znienna x: $x";
echo "<br>" . $metoda1;
?>
<br>
<?php
// metoda 2
$metoda2 = 'zmienna x: $x';
echo "<br>" . $metoda2;
?>
<br>
<br>
<?php
// heredoc
$pytanie = "<br>Czy znasz odpowiedź?";
$zagadka = <<<TXT
Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
Ut enim ad minim veniam, 
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
$pytanie
TXT;
echo $zagadka;
?>
<br>

<?php
// nowdoc
$liczba = 5 * 5 - 16 / 8;
$komunikat = <<<EOD
<br>Wartość zmiennej liczba wynosi $liczba
EOD;
echo $komunikat;
$nowy = <<<'EOD'
<br>Wartość zmiennej liczba wynosi $liczba
EOD;
?>
<br>
<br>
<?php
$uczniowie = array(
    "u1" => "Kowal",
    "u2" => "Nowak",
    "u3" => "Jan"
);
echo "Uczniowie:<br>";
echo "Uczeń nr 1: " . $uczniowie['u1'] . "<br>";
echo "Uczeń nr 2: " . $uczniowie['u2'] . "<br>";
echo "Uczeń nr 3: " . $uczniowie['u3'] . "<br>";
?>
<a href="ksiazka_tel.php">ksiazka telefoniczna</a>
</body>
</html>