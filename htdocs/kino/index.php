<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <title>Kino</title>
</head>
<body style="margin: 0;">
    <div style="display: flex; margin: 2em">
        <div style="border: 1px blue solid; padding: 2em">
            <h1>Kasa biletowa online</h1>
            <form action="oblicz.php" method="post">
                <label>
                    <img src='img/img1.PNG' alt='ticket' style="max-height: 3em;"><br>
                    <strong>Liczba biletów normalnych (27 PLN/szt):</strong><br>
                    <input type="number" name="bilet-normalny">
                </label>

                <br><br>
                <label>
                    <img src="img/img2.png" alt="ticket-2" style="max-height: 3em;"><br>
                    <strong>Liczba biletów ulgowych (18 PLN/szt):</strong><br>
                    <input type="number" name="bilet-ulgowy">
                </label>

                <br><br>
                <input type="submit" value="Zamów">
            </form>
        </div>
        <img src="img/img0.PNG" alt="baner" style="margin: 0 2em;">
    </div>
    <footer style="margin-top: 1em; padding: 4em; background-color: #00bfbf">
        Michał Zawadzki 11.03.2021
    </footer>
</body>
</html>