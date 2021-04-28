<html lang="pl">
<head>
    <title>Formularz</title>
    <meta charset="utf-8">
</head>
<body>
    <form action="handle.php" method="post">
        <label>
            <input name="imie" placeholder="Imię" required>
            Imie
        </label>
        <br>
        <label>
            <input name="nazwisko" placeholder="Nazwisko" required>
            Nazwisko
        </label>
        <br>
        <label>
            <input name="data-ur" type="date" placeholder="dd-mm-rrrr" required>
            Data urodzenia
        </label>
        <br>
        <label>
            <input name="pesel" placeholder="PESEL" required>
            PESEL
        </label>
        <br>
        <label>
            <input name="nip" placeholder="NIP" required>
            NIP
        </label>
        <br>
        <label>
            <input name="kod-pocztowy" placeholder="XX-XXX" required>
            Kod Pocztowy
        </label>
        <br>
        <label>
            <input name="miasto" placeholder="Miasto" required>
            Miasto
        </label>
        <br>
        <label>
            <input name="adres" placeholder="Adres" required>
            Adres
        </label>
        <br>
        <label>
            <input type="email" name="email" placeholder="user@example.com" required>
            E-Mail
        </label>
        <br>
        <label>
            <input name="komorka" placeholder="+XX XXX XXX XXX" required>
            Telefon Komórkowy
        </label>
        <br>
        <label>
            <input name="stacjonarny" placeholder="XX XXX XX XX" required>
            Telefon Stacjonarny
        </label>
        <br>
        <label>
            <select name="plec" required>
                <option value="kobieta">K</option>
                <option value="mezszczyzna">M</option>
            </select>
            Płeć
        </label>
        <br>
        <input type="submit">
        <input type="reset" value="reset">
    </form>
</body>
</html>