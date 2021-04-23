<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <title>Zamówienie</title>
    <style>
        * {
            font-family: "Open Sans", "DejaVu Sans", sans-serif;
        }
        .bg {
            background-color: #1e425d;
            color: white;
            padding: 2em 4em;
        }
        .flex {
            display: flex;
        }
        .border {
            border: dashed yellow 3px;
        }
        .price {
            color: yellow;
        }
        .m-2 {
            margin: 2em;
        }
    </style>
</head>
<body style="margin: 0">
    <div class="flex">
        <div class="bg border m-2">
        <?php
        $normalne = $_POST["bilet-normalny"];
        $ulgowe = $_POST["bilet-ulgowy"];
        $cena = $normalne * 27 + $ulgowe * 18;
        ?>
            <h2 style="text-align: center">Kino Pod Gwiazdami</h2>
            <p>Dokonano następującego zamówienia:</p>
            <ul style="list-style-type: circle">
                <?php
                echo "<li>Bilety normalne: <strong>$normalne sztuk</strong></li>";
                echo "<li>Bilety ulgowe: <strong>$ulgowe sztuk</strong></li>";
                ?>
            </ul>
        <?php

        echo "<strong>Koszt twojego zamówienia wynosi: <span class='price'>$cena zł.</span></strong>";
        ?>
        </div>
    </div>
    <span><a href="./">Strona główna</a> </span>
    <footer style="margin-top: 1em; padding: 4em; background-color: #00bfbf">
        Michał Zawadzki 11.03.2021
    </footer>
</body>
</html>