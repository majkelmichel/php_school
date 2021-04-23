<html lang="pl">
<head>
    <title>Pola figur</title>
    <meta charset="utf-8">
    <link href="style.css" rel="stylesheet">
</head>
<body>
<?php
include "header.php";
?>
    <table>
        <thead>
        <tr>
            <th>Nazwa figury</th>
            <th>Rysunek</th>
            <th>Przykładowe pole</th>
        </tr>
        </thead>
        <tbody>
        <?php
        require_once "funkcje.php";
        if (array_key_exists("figury", $_POST)) {
            if (array_key_exists('trojkat', $_POST)) {
                $a = $_POST["trojkat"]["a"];
                $h = $_POST["trojkat"]["h"];
                $pole = trojkat($a, $h);
                echo <<<TR
        <tr>
            <td class="head">TRÓJKĄT</td>
            <td><img src="img/img0.png" alt="trojkat"></td>
            <td>Pole trójkąta o podstawie $a i wysokości $h wynosi: $pole</td>
        </tr>
TR;
            }
            if (array_key_exists('prostokat', $_POST)) {
                $a = $_POST["prostokat"]["a"];
                $b = $_POST["prostokat"]["b"];
                $pole = prostokat($a, $b);
                echo <<<TR
        <tr>
            <td class="head">PROSTOKĄT</td>
            <td><img src="img/img1.png" alt="prostokąt"></td>
            <td>Pole prostokąta o bokach $a i $b wynosi: $pole</td>
        </tr>
TR;
            }
            if (array_key_exists('trapez', $_POST)) {
                $a = $_POST["trapez"]["a"];
                $b = $_POST["trapez"]["b"];
                $h = $_POST["trapez"]["h"];
                $pole = trapez($a, $b, $h);
                echo <<<TR
        <tr>
            <td class="head">TRAPEZ</td>
            <td><img src="img/img2.png" alt="trojkat"></td>
            <td>Pole trapezu o podstawach $a oraz $b i wysokości $h wynosi: $pole</td>
        </tr>
TR;
            }
            if (array_key_exists('kolo', $_POST)) {
                $r = $_POST["kolo"]["r"];
                $pole = kolo($r);
                echo <<<TR
        <tr>
            <td class="head">KOŁO</td>
            <td><img src="img/img3.png" alt="trojkat"></td>
            <td>Pole koła o promieniu $r wynosi: $pole</td>
        </tr>
TR;
            }
        } else {
            echo <<<TR
        <tr>
            <td class="head">BRAK FIGUR</td>
            <td>BRAK FIGUR</td>
            <td>BRAK FIGUR</td>
        </tr>
TR;

        }
        ?>
        </tbody>
    </table>
    <a href="./">Strona główna</a>
<?php
include "footer.php";
?>
</body>
</html>

<?php
echo '<pre>'; print_r($_POST); echo '</pre>';
?>