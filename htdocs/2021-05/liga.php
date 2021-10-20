<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>piłka nożna</title>
    <link rel="stylesheet" href="styl2.css">
</head>
<?php
$conn = mysqli_connect('localhost', 'root', '', 'egzamin2');
?>
<body>
<div class="flex-col">
    <header>
        <h3>Reprezentacja polski w piłce nożnej</h3>
        <img src="obraz1.jpg" alt="reprezentacja">
    </header>
    <div class="flex">
        <div class="left">
            <form action="liga.php" method="post">
                <label>
                    <select name="pozycja">
                        <option value="1">Bramkaże</option>
                        <option value="2">Obrońcy</option>
                        <option value="3">Pomocnicy</option>
                        <option value="4">Napastnicy</option>
                    </select>
                </label>
                <button type="submit">Zobacz</button>
                <br>
                <img src="zad2.png" alt="piłka">
                <p>
                    Autor: Michał Zawadzki 4tc
                </p>
            </form>
        </div>
        <div class="right">
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
    </div>
    <main>
        <h3>Liga mistrzów</h3>
    </main>
    <div class="flex" id="liga">
        <?php
        $zespoly = $conn->query("SELECT zespol, punkty, grupa FROM liga ORDER BY punkty DESC;");
        foreach ($zespoly as $item) {
            echo "<article>";
            $zespol = $item["zespol"];
            $punkty = $item["punkty"];
            $grupa = $item["grupa"];
            echo "<h2>$zespol</h2>";
            echo "<h1>$punkty</h1>";
            echo "<p>grupa: $grupa</p>";
            echo "</article>";
        }
        ?>
    </div>
</div>
</body>
</html>