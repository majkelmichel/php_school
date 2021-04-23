<html lang="pl">
<head>
    <title>Pętle</title>
</head>
<body>
    <div style="display: flex; flex-direction: column; justify-content: center;">
        <h2>Zadanie 1</h2>
        <?php
        $imie = "Michał";
        $nazwisko = "Zawadzki";
        echo <<<EOD
        <div style="display: flex; flex-direction: column; justify-content: center; border: #00bfbf 4px solid; border-radius: 1em; width: 20em; background-color: lightgray; color: #7d0000;">
            <div style="display: flex; border-bottom: #00bfbf 4px solid; padding: 0 1em; justify-content: center;">
                <h2>$imie $nazwisko</h2>
            </div>
            <div style="display: flex; justify-content: center; padding: 1em;">
                <span>3tc</span>
            </div>
        </div>
EOD;
        ?>
        <h2>Zadanie 2</h2>
        <?php
        for ($i = 1; $i <= 50; $i++) {
            echo $i . " ";
        }
        ?>
        <h2>Zadanie 3</h2>
        <?php
        $arr = [];
        $sum = 0;
        for ($i = 0; $i < 20; $i++) {
            $r = rand(1, 50);
            $sum += $r;
            array_push($arr, $r);
            echo $r . " ";
        }
        echo "<br>Średnia: " . $sum / 20;
        ?>
        <h2>Zadanie 4</h2>
        <?php
        $liczba = 43125;
        echo "Liczba do odwrócenia: $liczba <br>";
        $res = "";
        while ($liczba / 10 > 0.09) {
            $a = floor($liczba / 10);
            $r = $liczba - $a * 10;
            $res .= $r;
//            echo "$liczba $a $r <br>";
            $liczba /= 10;
            $liczba = floor($liczba);
        }
        echo "Odwrócona liczba: $res";
        ?>
        <h2>Zadanie 5</h2>
        <?php
        echo "<table style='border-collapse: collapse;'>";
        $x = 1;
        while ($x < 11) {
            $y = 1;
            echo "<tr>";
            do {
                $val = $x * $y;
                echo "<td style='border: #7d0000 dashed 2px; padding: 5px; text-align: center;'>{$val}</td>";
                $y++;
            } while ($y < 11);
            echo "</tr>";
            $x++;
        }
        echo "</table>";

        $arr = range(11,20);
        $arr2 = array_slice($arr, 5);
        print_r($arr);
        print_r(max($arr));
        print_r($arr2);
        ?>
    </div>
</body>
</html>