<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Twój wskaźnik BMI</title>
    <link rel="stylesheet" href="styl4.css">
</head>
<?php
$conn = mysqli_connect('localhost', 'root', '', 'bmi');
?>
<body>
<div class="flex flex-col">
    <div class="flex">
        <header>
            <h1>Oblicz swoje BMI</h1>
        </header>
        <div class="logo">
            <img src="wzor.png" alt="liczymy BMI">
        </div>
    </div>
    <div class="flex">
        <div class="left">
            <img src="rys1.png" alt="zrzuć kalorie!">
        </div>
        <div class="right">
            <h1>Podaj dane</h1>
            <form action="waga.php" method="post">
                <label for="waga">
                    Waga:
                    <input type="number" id="waga" min="1" name="waga">
                </label><br>
                <label for="wzrost">
                    Wzrost [cm]:
                    <input type="number" id="wzrost" min="1" name="wzrost">
                </label><br>
                <input type="submit" value="Licz BMI i zapisz wynik">
            </form>
            <?php
            if (isset($_POST["waga"]) and isset($_POST["wzrost"])) {
                $waga = intval($_POST["waga"]);
                $wzrost = intval($_POST["wzrost"]);
                $bmi = $waga / pow($wzrost, 2) * 10000;
                echo "Twoja waga: $waga; Twój wzrost: $wzrost
<br>
BMI wynosi: $bmi";
                $wynik = 0;
                if (0 <= $bmi and $bmi <= 18) {
                    $wynik = 1;
                } elseif (19 <= $bmi and $bmi <= 25) {
                    $wynik = 2;
                } elseif (26 <= $bmi and $bmi <= 30) {
                    $wynik = 3;
                } elseif (31 <= $bmi and $bmi <= 100) {
                    $wynik = 4;
                }

                $data = date('Y-m-d');
                $conn->query("INSERT INTO `wynik`(`bmi_id`, `data_pomiaru`, `wynik`) VALUES ($wynik,  '$data', $bmi);");
            }
            ?>
        </div>
    </div>
    <main>
        <table>
            <tr>
                <th>lp.</th>
                <th>Interpretacja</th>
                <th>zaczyna się od...</th>
            </tr>
            <?php
            $result = $conn->query("SELECT `id`, `informacja`, `wart_min` FROM `bmi`;");
            foreach ($result as $item) {
                $informacja = $item["informacja"];
                $min = $item["wart_min"];
                $id = $item["id"];
                echo <<<DOC
            <tr>
                <td>$id</td>
                <td>$informacja</td>
                <td>$min</td>
            </tr>
DOC;
            }
            ?>
        </table>
    </main>
    <footer>
        Autor: Michał Zawadzki 4tc
        <a href="kw2.png">Wynik działania kwerendy 2</a>
    </footer>
</div>
</body>
</html>
<?php
$conn->close();