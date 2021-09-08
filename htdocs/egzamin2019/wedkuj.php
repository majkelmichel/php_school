<html lang="pl">
<head>
    <meta charset="utf-8">
    <title>Wędkujemy</title>
    <link rel="stylesheet" href="styl_1.css">
</head>
<body>
<?php
$id = mysqli_connect('localhost', 'root', '', 'wedkowanie');

$result = mysqli_query($id, 'SELECT nazwa, wystepowanie FROM ryby WHERE styl_zycia = 1;')->fetch_all();
?>
<div class="content">
    <header>
        <h1>Portal dla wędkarzy</h1>
    </header>
    <main>
    <div class="left">
        <h2>Ryby drapieżne naszych wód</h2>
        <ul>
            <?php
            foreach ($result as $value) {
                $nazwa = $value[0];
                $wystepowanie = $value[1];
                echo "<li>$nazwa, występowanie $wystepowanie</li>";
            }
            ?>
        </ul>
    </div>
    <div class="right">
        <img src="ryba1.jpg" alt="Sum"><br>
        <a download href="screeny/kwerendy.txt">Pobierz kwerendy</a>
    </div>
    </main>
    <footer>
        <p>
            Stronę wykonał: Michał Zawadzki 4tc
        </p>
    </footer>
</div>
</body>
</html>
<?php
$result->close();
$id->close();