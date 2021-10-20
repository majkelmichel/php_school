<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rozgrywki futbolowe</title>
    <link rel="stylesheet" href="styl.css">
</head>
<?php
$conn = mysqli_connect('localhost', 'root', '', 'egzamin');
?>
<body>
    <div class="flex-col">
        <header>
            <h2>Światowe rozgrywki piłkarskie</h2>
            <img src="obraz1.jpg" alt="boisko">
        </header>
        <div class="flex" id="mecze">
            <?php
            $mecze = $conn->query("SELECT zespol1, zespol2, wynik, data_rozgrywki FROM rozgrywka WHERE zespol1 = 'EVG';");
            foreach ($mecze as $item) {
                echo "<article>";
                $z1 = $item["zespol1"];
                $z2 = $item["zespol2"];
                echo "<h3>$z1 - $z2</h3>";
                $wynik = $item["wynik"];
                echo "<h4>$wynik</h4>";
                $date = $item["data_rozgrywki"];
                echo "<p>w dniu: $date</p>";
                echo "</article>";
            }
            ?>
        </div>
        <main>
            <h2>Reprezentacja Polski</h2>
        </main>
        <div class="flex">
            <div class="left">
                <p>Podaj pozycję zawodników (1-bramkarze, 2-obrońcy, 3-pomocnicy, 4-napastnicy):</p>
                <form action="futbol.php" method="post">
                    <input type="number" name="pozycja">
                    <button type="submit">Sprawdź</button>
                </form>
                <ol>
                    <?php
                    if (array_key_exists('pozycja', $_POST)) {
                        $pozycja = $_POST['pozycja'];
                        $zawodnicy = $conn->query("SELECT imie, nazwisko FROM zawodnik WHERE pozycja_id = $pozycja;");

                        foreach ($zawodnicy as $item) {
                            $imie = $item['imie'];
                            $nazwisko = $item['nazwisko'];
                            echo "<li><p>$imie $nazwisko</p></li>";
                        }
                    }
                    ?>
                </ol>
            </div>
            <div class="right">
                <img src="zad1.png" alt="piłkarz">
                <p>
                    Autor: Michał Zawadzki 4tc
                </p>
            </div>
        </div>
    </div>
</body>
</html>