<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Twoje BMI</title>
    <link rel="stylesheet" href="styl3.css">
</head>
<?php
$conn = mysqli_connect('localhost', 'root', '', 'bmi');
?>
<body>
<div class="flex flex-col">
    <div class="flex">
        <div class="logo">
            <img src="wzor.png" alt="wzór BMI">
        </div>
        <header>
            <h1>Oblicz swoje BMI</h1>
        </header>
    </div>
    <main>
        <table>
            <tr>
                <th>Interpretacja BMI</th>
                <th>Wartość minimalna</th>
                <th>Wartość maksymalna</th>
            </tr>
            <?php
            $result = $conn->query("SELECT `informacja`, `wart_min`, `wart_max` FROM `bmi`;");
            foreach ($result as $item) {
                $informacja = $item["informacja"];
                $min = $item["wart_min"];
                $max = $item["wart_max"];
                echo <<<DOC
            <tr>
                <td>$informacja</td>
                <td>$min</td>
                <td>$max</td>
            </tr>
DOC;
            }
            ?>
        </table>
    </main>
    <div class="flex">
        <div class="left">
            <h2>Podaj wagę i wzrost</h2>
            <form action="bmi.php" method="post">
                <label for="waga">
                    Waga:
                    <input type="number" id="waga" min="1" name="waga">
                </label><br>
                <label for="wzrost">
                    Wzrost w cm:
                    <input type="number" id="wzrost" min="1" name="wzrost">
                </label><br>
                <input type="submit" value="Oblicz i zapamiętaj wynik">
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
        <div class="right">
            <img src="rys1.png" alt="ćwiczenia">
        </div>
    </div>
    <footer>
        Autor: Michał Zawadzki 4tc
        <a href="kwerendy.txt" download>Zobacz kwerendy</a>
    </footer>
</div>
</body>
</html>
<?php
$conn->close();