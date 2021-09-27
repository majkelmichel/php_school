<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Strona główna</title>
</head>
<body>
<h1>Strony klubów:</h1>
<ul>
    <?php
    $conn = mysqli_connect('localhost', 'root', '', 'ekstraklasa');

    for ($id = 1; $id <= 4; $id++) {
        $trener_query = "SELECT Imie, Nazwisko FROM trener WHERE Id_k = $id;";
        $klub_query = "SELECT Nazwa FROM kluby WHERE Id_k = $id;";

        $pilkarze_query = "SELECT pilkarze.Imie, pilkarze.Nazwisko, pilkarze.Rok_urodzenia, pilkarze.Id_k
FROM pilkarze 
    LEFT JOIN wypozyczenia w on pilkarze.Id_p = w.Id_p
WHERE Id_w IS NULL AND pilkarze.Id_k = $id";

        $klub = $conn->query($klub_query)->fetch_row()[0];
        [$imie, $nazwisko] = $conn->query($trener_query)->fetch_row();


        echo "<h2>Nazwa: $klub</h2>";
        echo "<h3>Trener: $imie, $nazwisko</h3>";
        $zawodnicy = $conn->query($pilkarze_query);

        echo "<ol>";
        foreach ($zawodnicy as $item) {
            $imie = $item['Imie'];
            $nazwisko = $item['Nazwisko'];
            echo "<li>$imie $nazwisko 🥶</li>";
        }
        echo "</ol>";
    }

    ?>
</ul>
</body>
</html>