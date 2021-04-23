<html lang="pl">
<head>
    <title>Kraina Figur</title>
    <meta charset="utf-8">
</head>
<body>
<?php
include "./header.php";
?>
<section>
    <form action="oblicz.php" method="post">
        <h2>Pola figur</h2>
        <br>
        <br>
        <fieldset>
            <legend>Figury:</legend>
            <label for="trojkat">
                Trójkąt
                <input type="checkbox" name="figury[]" value="trojkat" onchange="wartosc(this, 'trojkat')">
                <br>
                <span id="trojkat" hidden>
                    <label>
                        Bok: <input type="number" name="trojkat[a]" class="trojkat" disabled required>
                        <br>
                    </label>
                    <label>
                        Wysokość: <input type="number" name="trojkat[h]" class="trojkat" disabled required>
                        <br>
                    </label>
                </span>
            </label>
            <br>
            <label for="prostokat">
                Prostokąt
                <input type="checkbox" name="figury[]" value="prostokat" onchange="wartosc(this, 'prostokat')">
                <br>
                <span id="prostokat" hidden>
                    <label>
                        Bok a: <input type="number" name="prostokat[a]" class="prostokat" disabled required>
                    </label>
                    <label>
                        <br>
                        Bok b: <input type="number" name="prostokat[b]" class="prostokat" disabled required>
                        <br>
                    </label>
                </span>
            </label>
            <br>
            <label for="trapez">
                Trapez
                <input type="checkbox" name="figury[]" value="trapez" onchange="wartosc(this, 'trapez')">
                <br>
                <span id="trapez" hidden>
                    <label>
                        Podstawa a: <input type="number" name="trapez[a]" class="trapez" disabled required>
                        <br>
                    </label>
                    <label>
                        Podstawa b: <input type="number" name="trapez[b]" class="trapez" disabled required>
                        <br>
                    </label>
                    <label>
                        Wysokość: <input type="number" name="trapez[h]" class="trapez" disabled required>
                        <br>
                    </label>
                </span>
            </label>
            <br>
            <label for="kolo">
                Koło
                <input type="checkbox" name="figury[]" value="kolo" onchange="wartosc(this, 'kolo')">
                <br>
                <span id="kolo" hidden>
                    <label>
                        Promień: <input type="number" name="kolo[r]" class="kolo" disabled required>
                        <br>
                    </label>
                </span>
            </label>
        </fieldset>
        <input type="submit">
    </form>
</section>
<?php
include "./footer.php";
?>
<script src="index.js"></script>
</body>
</html>