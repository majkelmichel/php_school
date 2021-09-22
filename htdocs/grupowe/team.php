<?php
$id = $_GET["id"];
$conn = mysqli_connect('localhost', 'root', '', 'ekstraklasa');

[$imie, $nazwisko] = $conn->query("SELECT Imie, Nazwisko FROM trener WHERE Id_k = $id;")->fetch_row();
$nazwa = $conn->query("SELECT Nazwa FROM kluby WHERE Id_k = $id;")->fetch_row()[0];

$zaw_query = <<<DOC
SELECT pilkarze.Imie, pilkarze.Nazwisko, pilkarze.Rok_urodzenia, pilkarze.Id_k, k.Nazwa
FROM pilkarze 
    LEFT JOIN wypozyczenia w on pilkarze.Id_p = w.Id_p 
    JOIN kluby k on k.Id_k = pilkarze.Id_k
WHERE Id_w IS NULL AND pilkarze.Id_k = $id
UNION
SELECT p.Imie, p.Nazwisko, p.Rok_urodzenia, p.Id_k, k.Nazwa
FROM wypozyczenia 
    JOIN pilkarze p on p.Id_p = wypozyczenia.Id_p 
    JOIN kluby k on k.Id_k = p.Id_k
WHERE wypozyczenia.Id_k = $id;
DOC;

$zawodnicy = $conn->query($zaw_query);
?>

<html lang="pl">
<head>
    <meta charset="utf-8">
    <title>Drużyna</title>
</head>
<body>
<h1>
    <?php
    echo $nazwa;
    ?>
</h1>
<h3>
    Trener:
    <?php
    echo "$imie $nazwisko";
    ?>
</h3>

<h4>Zawodnicy:</h4>
<ul>

    <?php
    foreach ($zawodnicy as $item) {
        $imie_z = $item['Imie'];
        $naz_z = $item['Nazwisko'];
        $rok_uro = $item['Rok_urodzenia'];
        $id_k = $item['Id_k'];

        $stan = "";
        if ($id_k != $id) {
            $klub = $item['Nazwa'];
            $stan = "<i>(Wypożyczony z $klub)</i>";
        }
        echo "<li>$imie_z $naz_z, $rok_uro $stan</li>";
    }
    ?>
</ul>
<a href="index.php">Powrót na stronę główną</a>
</body>
</html>